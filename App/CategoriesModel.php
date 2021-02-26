<?php


namespace App;


use Core\CoreModel;

class CategoriesModel extends CoreModel
{
    public function category()
    {
        $text = array();
        $sql = "SELECT (*) AS  FROM " . $this->table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $text = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (empty($result)) {
            return false;
        } else {
            return $text;
        }
    }
}