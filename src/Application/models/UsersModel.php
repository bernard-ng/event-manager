<?php

use Application\models\Model;

class UsersModel extends Model
{
    protected $table = 'users';


    public function findAlternative(array $field, string $value)
    {
        return $this->db->query(
            "SELECT * FROM {$this->table} WHERE ({$field[0]} = ? OR {$field[1]} =  ?)",
            [$value, $value]
        )->result_object();
    }
}
