<?php
 
 
 
if (preg_match('/\.(?:png|jpg|jpeg|gif|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
 
 

 
spl_autoload_register(function ($class) {
    if (!str_starts_with($class, 'App\\')) {
        return;
    }

    $class = substr($class, 4);
    $class = str_replace('\\', '/', $class);
    $file = __DIR__ . "/../src/$class.php";
    if (is_file($file)) {
        require_once $file;
    }
});
 
use App\Router;
session_start();
 
require __DIR__ . '/../helpers.php';
require __DIR__ . '/../routes.php';

 
$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();
if($match) {
    if(is_callable($match->getAction())) {
        call_user_func($match->getAction());
    } else if (is_array($match->getAction())){
        $class = $match->getAction()[0];
        $controller = new $class();
        $method = $match->getAction()[1];
        $controller->$method();
    }
} else {
    echo 404;
}
