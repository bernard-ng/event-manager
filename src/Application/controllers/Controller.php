<?php
namespace Application\controllers;

class Controller extends \CI_Controller
{

    protected $pageName = null;
    private $defaultName = "EventManager";
    private $titleSeparator = " | ";
    protected $layout = "default";


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('str');
        $this->load->library('msg');
    }



    /**
     * defini le layout de la vue courante
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->pageName = $title;
    }


    /**
     * defini le layout de la vue courante
     *
     * @param string $layout
     * @return void
     */
    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }


    /**
     * retourne le nom du layout
     *
     * @return string
     */
    private function getLayout(): string
    {
        return $this->layout;
    }


    /**
     * permet de rendre une vue avec un layout
     *
     * @param string $view
     * @param array $variable
     * @param string $layout
     * @return void
     */
    public function viewRender(string $view, array $variable = []): void
    {
        if ($this->pageName !== null) {
            $pageName = $this->pageName . $this->titleSeparator . $this->defaultName;
        } else {
            $pageName = $this->defaultName;
        }

        $pageContent = $this->load->view($view, $variable, true);

        $this->load->view(
            "layouts/{$this->getLayout()}",
            compact('pageContent', 'pageName')
        );
    }
}
