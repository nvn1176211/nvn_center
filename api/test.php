<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

// echo(__DIR__);

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

echo getenv('TEST11');