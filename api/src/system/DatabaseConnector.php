<?php
namespace src\system;

class DatabaseConnector {

    private $dbConnection = null;

    public function __construct()
    {
        $host = getenv('HOST');
        $db_name = getenv('DB_NAME');
        $db_username = getenv('DB_USERNAME');
        $db_password = getenv('DB_PASSWORD');
        try {
            $this->dbConnection = new \PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
            // set the PDO error mode to exception
            // $this->dbConnection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch(\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        // return $this->dbConnection;

        $rawQuery = "
            SELECT 
                *
            FROM
                tags;
        ";

        try {
            $statement = $this->dbConnection->query($rawQuery);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
        
    }
}