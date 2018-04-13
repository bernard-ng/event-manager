<?php
namespace Application\models;

class Model extends \CI_Model
{

    /**
     * definit le nom de la table a partir du nom de la class
     * si la class ne defini pas le nom de la table, celui-ci
     * sera automatiquement defini. le nom de la class doit donc
     * correspondre au pattern.
     *
     * @author Bernard ng <ngandubernard@gmail.com>
     */
    public function __construct()
    {
        parent::__construct();

        if ($this->table === null) {
            $table = get_class($this);
            $table = explode('\\', $table);
            $table = end($table);
            $table = strtolower(str_replace('Model', '', $table));
            $this->table = $table;
        }
    }

    /**
     * nom de la table dans la base de donnee
     *
     * @var string
     * @author Bernard ng <ngandubernard@gmail.com>
     */
    protected $table = null;


    /**
     * insertion de donnee dans la base de donne
     * creation de donnee
     *
     * @param array $data
     * @return void
     * @author Bernard ng <ngandubernard@gmail.com>
     */
    public function insert(array $data)
    {
        $this->db->insert($this->table, $data);
    }


    /**
     * suppression de donnee dans la base de donnee
     *
     * @param integer $id
     * @param string $field
     * @return void
     * @author Bernard ng <ngandubernard@gmail.com>
     */
    public function delete(int $id, string $field)
    {
    }


    /**
     * mise a jour de donnee dans la base de donnee
     *
     * @param array $data
     * @return void
     * @author Bernard ng <ngandubernard@gmail.com>
     */
    public function update(array $data)
    {
    }

    /**
     * recupere les derniers posts
     * @param integer $number
     * @return mixed
     */
    public function getLast(int $number)
    {
        return $this->db->query(
            $this->db
                ->limit(intval($number), 0)
                ->get_compiled_select($this->table)
        )->result_object();
    }


    /**
     * renvoi une entree dans la base de donne grace a son id
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        return $this->db
            ->query(
                $this->db
                    ->where("id", intval($id))
                    ->get_compiled_select($this->table)
            )
            ->result_object();
    }
}
