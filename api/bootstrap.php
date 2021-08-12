<?php
require './vendor/autoload.php';

use Dotenv\Dotenv;

// echo(__DIR__);

$dotenv = new DotEnv(__DIR__);
$dotenv->load();

echo getenv('TEST123');

$host = "127.0.0.1";
$dbname = "nvn_center";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}