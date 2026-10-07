<?php

function dump(...$vars)
{
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}

function view($viewName, $variables) {
    extract($variables);
    $viewPath = __DIR__ . "/views/{$viewName}.php";
    include $viewPath;
}