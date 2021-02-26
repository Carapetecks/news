<?php


namespace App;


use Core\CoreModel;

class ArticlesModel extends CoreModel
{
    public function getSingleArticleById($id)
    {
        $result = array();
        $sql = "SELECT * FROM " . $this->table . " WHERE  id= :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if (empty($result)) {
            return false;
        } else {
            return $result;
        }
    }
    public function article()
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