<?php

namespace App\Controllers;

class AuthController {
    public function loginform() {
        view('login');
    }

    public function login() {

    }

    public function registerForm() {
        session_start();
        dump($_SESSION);
        setcookie('my cookie', 'tasty', time() + 60+60*24*30, '', '', false, true);
        dump($_COOKIE);
    }

    public function register() {
        view('register');
    }
    
    public function logout() {

    }


}
