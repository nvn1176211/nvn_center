<?php
$requestMethod = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER['REQUEST_URI'];

// switch ($uri) {
//     case '/' :
//         require __DIR__ . '/views/index.php';
//         break;
//     case '' :
//         require __DIR__ . '/views/index.php';
//         break;
//     case '/about' :
//         require __DIR__ . '/views/about.php';
//         break;
//     default:
//         http_response_code(404);
//         require __DIR__ . '/views/404.php';
//         break;
// }


echo '<pre>' ;
echo var_export($uri);
echo '</pre>';die;
// RewriteRule ^(.+)$ index.php [QSA,L]