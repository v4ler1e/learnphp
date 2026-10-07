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

use App\controllers\PublicController as PC;

$router = new Router();
$db = new DB();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
$controller = new PC();
dump($router);
dump($db);
dump($publicController);


// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         $title = 'World';
//         $posts = [
//             [
//                 'title' => 'Some World title 1',
//                 'date' => 'January 1, 2021',
//                 'author' => 'Pets',
//                 'body' => 'Some World body 1',
//             ],
//             [
//                 'title' => 'Some World title 2',
//                 'date' => 'January 4, 2021',
//                 'author' => 'Jaanus',
//                 'body' => 'Some World body 2',
//             ],
//             [
//                 'title' => 'Some World title 3',
//                 'date' => 'January 6, 2021',
//                 'author' => 'Tseburaska',
//                 'body' => 'Some World body 3',
//             ],
//             [
//                 'title' => 'Some World title 4',
//                 'date' => 'January 8, 2021',
//                 'author' => 'Gena',
//                 'body' => 'Some World body 4',
//             ],
//         ];
//         include __DIR__ . '/../views/index.php';
//         break;

//     case '/us':
//         $posts = [
//             [
//                 'title' => 'Some U.S title 1',
//                 'date' => 'January 1, 2021',
//                 'author' => 'Pets',
//                 'body' => 'Some U.S body 1',
//             ],
//             [
//                 'title' => 'Some U.S title 2',
//                 'date' => 'January 4, 2021',
//                 'author' => 'Jaanus',
//                 'body' => 'Some U.S body 2',
//             ],
//             [
//                 'title' => 'Some U.S title 3',
//                 'date' => 'January 6, 2021',
//                 'author' => 'Tseburaska',
//                 'body' => 'Some U.S body 3',
//             ],
//             [
//                 'title' => 'Some U.S title 4',
//                 'date' => 'January 8, 2021',
//                 'author' => 'Gena',
//                 'body' => 'Some U.S body 4',
//             ],
//         ];
//         include __DIR__ . '/../views/us.php';
//         break;

//     default:
//         echo 404;
// }