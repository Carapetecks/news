<?php


namespace App\Core;


class CoreModel
{
    public $db;
    public $table;
    public $out=array();
    public function __construct($table)
    {
    $this->db= new \mysqli(DB_HOST, DB_USER,DB_PASSWORD,DB_DATABASE);
    $this->db-> set_charset('utf8');
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

}