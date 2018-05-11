<?php
use Application\controllers\Controller;

class EventsController extends Controller
{

    /**
     * EventsController constructor.
     * oblige une connexion pour que le system fonctionnne
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EventsModel');

        if (parent::loggedOnly() === false) {
            $this->flash->set('danger', $this->msg['users_not_logged']);
            redirect("/leading");
        }
    }


    /**
     * genere la page d'acceuil sous forme de calendrier
     */
    public function index()
    {
        // setting of the calendar...
        if (isset($_GET['m'])) {
            $month = intval($this->input->get('m'));
            $year = intval($this->input->get('y'));
            $this->load->library('event_calendar', compact('month', 'year'), 'calendar');
        } else {
            $this->load->library('event_calendar', null, 'calendar');
        }

        $days = $this->calendar->days;
        $weeks = $this->calendar->getWeeks();
        $start = $this->calendar->getStratingDay();
        $start = $start->format('N') === '1' ? $start : $this->calendar->getStratingDay()->modify('last monday');

        $end = (clone $start)->modify('+' . (6 * 7 - ($weeks - 1)) . 'days');
        $calendar = $this->calendar;
        $current_month = $this->calendar->toString();
        $nextMonth = $this->calendar->nextMonth()->getMonth();
        $nextYear = $this->calendar->nextMonth()->getYear();
        $previousMonth = $this->calendar->previousMonth()->getMonth();
        $previousYear = $this->calendar->previousMonth()->getYear();



        //getting events...
        $this->load->library('event_manager', null, 'events');
        $events = $this->events->getEventsBetweenByDay($start, $end);

        $this->viewRender('backend/calendar/events', compact(
            'current_month',
            'nextMonth',
            'nextYear',
            'previousMonth',
            'previousYear',
            'calendar',
            'events',
            'start',
            'days',
            'weeks'
        ));
    }


    /**
     * permet d'obtenir les details d'un event
     * @param int $id
     */
    public function show(int $id) {

        $event = $this->EventsModel->find($id);
        if ($event) {
            $this->viewRender('backend/calendar/show', compact('event'));
        } else {
            $this->flash->set('danger', $this->msg['post_not_found']);
            redirect("/events");
        }
    }


    /**
     * permt d'ajouter un event
     */
    public function add()
    {
        if ($this->input->method() === "post") {
            $this->load->library('form_validation');
            $checkTime = function(string $time) {
                if (DateTime::createFromFormat('H:i', $time) === false) {
                    $this->form_validation->set_message("la date n'est pas bonne");
                    return false;
                }
                return true;
            };

            $checkDate = function(string $date) {
                if (DateTime::createFromFormat('Y-m-d', $date) === false) {
                    $this->form_validation->set_message("la date n'est pas bonne");
                    return false;
                }
                return true;
            };

            $this->form_validation->set_rules('date', 'date', $checkDate($this->input->post('date')));
            $this->form_validation->set_rules('started', 'heure debut', $checkTime($this->input->post('started')));
            $this->form_validation->set_rules('end', 'heure fin', $checkTime($this->input->post('started')));
            $this->form_validation->set_rules('description','description', 'required|min_length[3]|max_length[255]');
            $this->form_validation->set_rules('title','titre', 'required|min_length[3]|max_length[255]');

            if ($this->form_validation->run()) {
                $title          = $this->str::escape($this->input->post('title'));
                $end            = $this->str::escape($this->input->post('end'));
                $date           = $this->str::escape($this->input->post('date'));
                $started        = $this->str::escpae($this->input->post('started'));
                $description    = $this->str::escape($this->input->post('description'));

                $this->EventsModel->insert(compact('title', 'end', 'date', 'started', 'description'));
                $this->session->set_flashdata($this->msg['form_event_submitted']);
                redirect("/events");
            } else {
                $this->session->set_flashdata($this->msg['form_multi_errors']);
            }

        }

        $this->setTitle("Ajouter un Event");
        $this->setLayout('backend/default');
        $this->viewRender("backend/calendar/add");
    }
}
