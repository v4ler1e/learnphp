<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}

function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

spl_autoload_register(function ($class) {
    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/src/$class.php";
});

use App\Router;

$router = new Router($_SERVER['REQUEST_URI']);

$action = $router->match();

if ($action) {
    $action();
} else {
    http_response_code(404);
    echo "404 - Page Not Found";
}

require __DIR__ . '/Routes.php';

$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if ($match) {
    call_user_func($match['action']);
} else {
    echo 404;
}

//     default:
//         echo 404;
// }