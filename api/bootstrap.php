<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

use src\system\DatabaseConnector;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

$DB = (new DatabaseConnector())->getConnection();
// echo '<pre>' ;
// echo var_export($tagsAll);
// echo '</pre>';die;