<?php

class event_manager {

    /**
     * le model
     *
     * @var EventsModel
     */
    private $EventsModel;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('EventsModel');
        $this->EventsModel = $this->CI->EventsModel;
    }

    /**
     * recupere tes saves dans son certeau.
     *
     * @param DateTime $start
     * @param DateTime $end
     * @return array
     */
    public function getEventsBetween (DateTime $start, DateTime $end): array
    {


        return $this->EventsModel->getPerMonth(
            $start->format('Y-m-d 00:00:00'),
            $end->format('Y-m-d 23:59:59')
        );
    }


    public function getEventsBetweenByDay (DateTime $start, DateTime $end) : array
    {

    }

}
