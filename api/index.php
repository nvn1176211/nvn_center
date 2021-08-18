<?php
require './bootstrap.php';
use src\models\tags;
use src\models\langs;


// $tags = new tags($dbConnection);
// $tagsAll = $tags->findAll();
// echo '<pre>' ;
// echo var_export($tagsAll);
// echo '</pre>';die;

// echo '<pre>' ;
// echo var_export($tagsAll);
// echo '</pre>';die;



$requestMethod = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/nvn_center/api/tags' : {
        $tags = new tags($DB);
        $tagsAll = $tags->findAll();
        echo json_encode($tagsAll);die;
    }
    case '/nvn_center/api/bootstrap' : {
        $langs = new langs($DB);
        $langsAll = $langs->findAll();
        $bootstrapData = [
            'lang' => $langsAll
        ];
        echo json_encode($bootstrapData);die;
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