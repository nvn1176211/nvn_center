<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

use src\system\DatabaseConnector;
use src\models\tags;

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

// $dbConnection = (new DatabaseConnector())->getConnection();
// $tags = new tags($dbConnection);
// $tagsAll = $tags->findAll();
// echo '<pre>' ;
// echo var_export($tagsAll);
// echo '</pre>';die;