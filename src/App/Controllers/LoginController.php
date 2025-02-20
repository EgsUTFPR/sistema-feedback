<?php

namespace App\Controllers;

class LoginController
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = 'admin';
        }
    }

    public function showLogin()
    {
        require_once __DIR__ . '/../Views/login.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
        exit;
    }
}
