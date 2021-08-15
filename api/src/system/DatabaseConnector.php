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
        } catch(\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}