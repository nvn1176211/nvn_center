<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

use src\system\DatabaseConnector;

// echo(__DIR__);

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$dbConnection = (new DatabaseConnector())->getConnection();
echo '<pre>' ;
echo var_export($dbConnection);
echo '</pre>';die;