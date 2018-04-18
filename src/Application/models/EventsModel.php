<?php

use Application\models\Model;

class EventsModel extends Model
{
    protected $table = 'events';


    public function getPerMonth(string $start, string $end)
    {
        return $this->db->query(
            "SELECT * FROM events WHERE started  BETWEEN ? AND ?",
            [$start, $end]
        )->result_object();
    }
}
