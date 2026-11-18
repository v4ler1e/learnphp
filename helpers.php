<?php

use App\Models\User;


function view($viewName, $variables=[]){
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($to) {
    header("Location: $to");
}

function auth() {
    $userID = $_SESSION['userID'] ?? false;
    if($userID) {
        return User::find($userID);
    }
    return false;
}