<?php

namespace App\Auth;

class Auth
{
    private static $usuario = "admin";
    private static $senha = "123456";

    public static function login($usuario, $senha)
    {
        if ($usuario === self::$usuario && $senha === self::$senha) {
            session_start();
            $_SESSION['admin'] = true;
            return true;
        }
        return false;
    }

    public static function logout()
    {
        session_start();
        session_destroy();
    }

    public static function verificarAcesso()
    {
        session_start();
        if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
            header("Location: /login");
            exit;
        }
    }
}
