<?php
require './bootstrap.php';

// $tags = new tags($dbConnection);
// $tagsAll = $tags->findAll();
// echo '<pre>' ;
// echo var_export($tagsAll);
// echo '</pre>';die;

echo '<pre>' ;
echo var_export($tagsAll);
echo '</pre>';die;



$requestMethod = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/nvn_center/api/tags' : {

        echo '<pre>' ;
        echo var_export($uri);
        echo '</pre>';

        break;
    }
    default:{
        
        // echo '<pre>' ;
        // echo var_export($uri);
        // echo '</pre>';        

        header("HTTP/1.1 404 Not Found");

        break;

    }
}

die;

// echo '<pre>' ;
// echo var_export($uri);
// echo '</pre>';die;
// RewriteRule ^(.+)$ index.php [QSA,L]