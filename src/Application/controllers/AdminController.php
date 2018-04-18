<?php

use Application\controllers\Controller;

class AdminController extends Controller
{


    public function index()
    {

        // setting of the calendar...
        if (isset($_GET['m'])) {
            $month =  intval($this->input->get('m'));
            $year  =  intval($this->input->get('y'));
            $this->load->library('event_calendar', compact('month', 'year'), 'calendar');
        } else {
            $this->load->library('event_calendar', null, 'calendar');
        }

        $days           =    $this->calendar->days;
        $weeks          =    $this->calendar->getWeeks();
        $start          =    $this->calendar->getStratingDay();
        $start          =    $start->format('N') === '1' ?
            $start :
            $this->calendar->getStratingDay()->modify('last monday');

        $end            =    (clone $start)->modify('+' . (6 * 7 - ($weeks - 1)) . 'days');
        $calendar       =    $this->calendar;
        $current_month  =    $this->calendar->toString();
        $nextMonth      =    $this->calendar->nextMonth()->getMonth();
        $nextYear       =    $this->calendar->nextMonth()->getYear();
        $previousMonth  =    $this->calendar->previousMonth()->getMonth();
        $previousYear   =    $this->calendar->previousMonth()->getYear();



        //getting events...
        $events = $this->load->library('event_manager', null, 'events');
        $evetns = $events->getEventsBetween($start, $end);


        $this->viewRender('backend/calendar/events', compact(
            'current_month',
            'nextMonth',
            'nextYear',
            'previousMonth',
            'previousYear',
            'calendar',
            'start',
            'days',
            'weeks'
        ));
    }
}
