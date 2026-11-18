<?php

namespace App\Controllers;

use App\Models\User;
use PDOException;

class UsersController
{
    public function index()
    {
        if ($this->authorize()) {
            view('users/index', [
                'users' => User::all(),
                'token' => $_SESSION['users_csrf'],
            ]);
        }
    }

    public function create()
    {
        if ($this->authorize()) {
            $this->showForm(new User());
        }
    }

    public function store()
    {
        if ($this->authorize(true)) {
            $this->save(new User());
        }
    }

    public function view()
    {
        if ($this->authorize() && ($user = $this->findUser())) {
            view('users/view', compact('user'));
        }
    }

    public function edit()
    {
        if ($this->authorize() && ($user = $this->findUser())) {
            $this->showForm($user);
        }
    }

    public function update()
    {
        if ($this->authorize(true) && ($user = $this->findUser())) {
            $this->save($user);
        }
    }

    public function delete()
    {
        if (!$this->authorize(true) || !($user = $this->findUser())) {
            return;
        }

        $user->delete();
        if ((string) $user->id === (string) $_SESSION['userID']) {
            unset($_SESSION['userID'], $_SESSION['users_csrf']);
            return redirect('/login');
        }
        redirect('/admin/users');
    }

    private function authorize(bool $write = false): bool
    {
        if (!auth()) {
            redirect('/login');
            return false;
        }

        $_SESSION['users_csrf'] ??= bin2hex(random_bytes(32));
        if ($write) {
            $token = $_POST['csrf_token'] ?? null;
            if (!is_string($token) || !hash_equals($_SESSION['users_csrf'], $token)) {
                http_response_code(403);
                echo 'Invalid form token.';
                return false;
            }
        }

        return true;
    }

    private function findUser(): User|false
    {
        $id = $_GET['id'] ?? null;
        if (is_string($id) && ctype_digit($id) && ($user = User::find($id))) {
            return $user;
        }

        http_response_code(404);
        echo 'User not found.';
        return false;
    }

    private function save(User $user)
    {
        $user->name = trim(is_string($_POST['name'] ?? null) ? $_POST['name'] : '');
        $user->email = trim(is_string($_POST['email'] ?? null) ? $_POST['email'] : '');
        $password = $_POST['password'] ?? '';

        if ($user->name === '' || strlen($user->name) > 1024) {
            return $this->showForm($user, 'Enter a name up to 1024 bytes long.');
        }
        if (strlen($user->email) > 255 || !filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            return $this->showForm($user, 'Enter a valid email address.');
        }
        if (!$user->id) {
            if (!is_string($password) || $password === '' ||
                strlen($password) > 72 || str_contains($password, "\0")) {
                return $this->showForm($user, 'Enter a password between 1 and 72 bytes.');
            }
            $user->password = password_hash($password, PASSWORD_BCRYPT);
        }

        try {
            $user->save();
        } catch (PDOException $exception) {
            if ((int) ($exception->errorInfo[1] ?? 0) !== 1062) {
                throw $exception;
            }
            return $this->showForm($user, 'That email address is already in use.');
        }

        redirect('/admin/users');
    }

    private function showForm(User $user, ?string $error = null)
    {
        if ($error !== null) {
            http_response_code(422);
        }
        $token = $_SESSION['users_csrf'];
        view('users/edit', compact('user', 'error', 'token'));
    }
}
