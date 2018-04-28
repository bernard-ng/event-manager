<?php

class event_manager {

    /**
     * le model
     *
     * @var EventsModel
     */
    private $EventsModel;

    /**
     * @var CI_Controller
     */
    private $CI;


    /**
     * event_manager constructor.
     */
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('EventsModel');
        $this->EventsModel = $this->CI->EventsModel;
    }

    /**
     * recupere les events entre deux dates
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     */
    public function getEventsBetween (DateTime $started, DateTime $end): array
    {
        return $this->EventsModel->getPerMonth(
            $started->format('Y-m-d 00:00:00'),
            $end->format('Y-m-d 23:59:59')
        );
    }


    /**
     * recupere les event d'un jour
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     */
    public function getEventsBetweenByDay (DateTime $started, DateTime $end) : array
    {
        $events = $this->getEventsBetween($started, $end);
        $days = [];
        foreach ($events as $event) {
            $date = explode(' ',$event['started'])[0];
            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }

}
