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


    public function show(int $id) {

        $event = $this->EventsModel->find($id);
        if ($event) {
            $this->viewRender('backend/calendar/show', compact('event'));
        } else {
            $this->flash->set('danger', $this->msg['post_not_found']);
            redirect("/events");
        }
    }
}
