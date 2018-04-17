<?php

use Application\controllers\Controller;

class UsersController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library("form_validation");
    }


    /**
     * administrator session connexion
     *
     * @return void
     */
    public function login()
    {
        if ($this->isLogged() === false) {
            if ($this->input->method() === 'post') {
                $this->form_validation->set_rules('name', 'name', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                if ($this->form_validation->run()) {
                    $name       =   $this->str::escape($this->input->post('name'));
                    $password   =   $this->input->post('password');
                    $user       =   $this->UsersModel->findAlternative(['name', 'email'], $name);

                    if ($user) {
                        if ($user->confirmed_at !== null) {
                            if (password_verify($password, $user->password)) {
                                $this->connect($user);

                                $this->flash->set('danger', $this->msg['users_login_success']);
                                redirect("/admin");
                            } else {
                                $this->flash->set('danger', $this->msg['users_bad_identifier']);
                            }
                        } else {
                            $this->flash->set('danger', $this->msg['users_not_confirmed']);
                        }
                    } else {
                        $this->flash->set('danger', $this->msg['users_bad_identifier']);
                    }
                } else {
                    $this->flash->set('danger', $this->msg['form_multi_errors']);
                }
            }

            $this->setTitle('Connexion');
            $this->viewRender('frontend/users/login');
        } else {
            $this->flash->set('danger', $this->msg['users_already_confirmed']);
        }
    }


    /**
     * le user est il connecter ?
     *
     * @return boolean
     */
    private function isLogged(): bool
    {
        if ($this->session->has_userdata(AUTH_KEY)) {
            return $this->session->userdata(AUTH_KEY);
        }
        return false;
    }


    /**
     * connexion du user
     *
     * @param mixed $user
     * @return void
     */
    private function connect($user): void
    {
        if ($this->isLogged === false) {
            $this->session->set_userdata(AUTH_KEY, $user);
            $this->session->set_userdata(TOKEN, $this->str::setToken(60));
        }
    }


    /**
     * deconnexion du user
     *
     * @return void
     */
    public function logout(): void
    {
        if ($this->isLogged !== false) {
            $this->session->unset_userdata(AUTH_KEY);
            $this->session->unset_userdata(TOKEN);
        }
        redirect("/login");
    }



    /**
     * inscription
     *
     * @return void
     */
    public function sign(): void
    {
        if ($this->input->method() === "post") {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'name', "required|alpha_numeric_spaces|min_length[3]|max_length[25]");
            $this->form_validation->set_rules('email', 'email', "required|valid_email|max_length[60]");
            $this->form_validation->set_rules('password', 'password', "required|min_length[8]");
            $this->form_validation->set_rules('password_confirm', 'password_confirm', "required|matches[password]");

            if ($this->form_validation->run()) {
                $name           =   $this->input->post('name');
                $email          =   $this->input->post('email');
                $password       =   $this->input->post('password');

                $this->register($name, $email, $password);
                $this->session->set_flashdata($this->msg['form_registeration_submitted']);
                redirect("/login");
            }
        }

        $this->setTitle('Inscription');
        $this->viewRender('frontend/users/sign');
    }


    /**
     * registration du user
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @return void
     */
    private function register(string $name, string $email, string $password): void
    {
        $name       =   $this->str::escape($name);
        $email      =   $this->str::escape($email);
        $password   =   $this->str::hash($password);

        $this->UsersModel->insert(compact('name', 'email', 'password'));
    }
}
