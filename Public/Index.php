<?php

session_start();


if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = 'admin';
    $_SESSION['password'] = '123456';
}

require_once __DIR__ . '/../Routes/Rotas.php';
