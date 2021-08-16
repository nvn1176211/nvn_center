<?php
namespace src\models;

class tags {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll(){
        $rawQuery = "
            SELECT 
                id, name
            FROM
                tags;
        ";

        try {
            $query = $this->db->query($rawQuery);
            $result = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}