<?php


namespace App\Core;


class CoreModel
{
    public $db;
    public $table;
    public $out=array();
    public function __construct($table)
    {
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $host = DB_HOST;
    $db = DB_NAME;
    $this->db= new \PDO("mysql:dbname=$db; host=$host" , $user, $pass);
    $this->db-> exec("SET NAMES 'utf8'");
    $this-> table = $table;
    }
    public function findUsingSlug($slug){}
    public function count()
    {
        $query = 'SELECT (*) AS c FROM'.$this ->table;
        $result = $this->db->query($query);
        $count = $result->Fetch_object()->c;
        $result->free();
        $this->db->close();
    }
    public function getAll()
    {
         $sql = 'SELECT * FROM' .$this->table;
         $stat= $this -> db-> prepare($sql);
         $stat -> execute();
         while (($row= $stat ->fetch(\PDO::FETCH_ASSOC))){
             $this -> out[] = $row;
         }
         return $this -> out;
    }
    public function getById($id)
    {
        дописать
    }

}