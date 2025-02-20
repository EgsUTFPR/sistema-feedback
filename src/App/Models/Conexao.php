<?php

namespace App\Database;

use PDO;
use PDOException;

class Conexao
{
    private $host = "localhost"; // Altere se necessário
    private $dbname = "feedback_db"; // Nome do banco
    private $username = "root"; // Usuário do banco
    private $password = ""; // Senha do banco
    private $conn;

    public function connect()
    {
        if ($this->conn === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
                $this->conn = new PDO($dsn, $this->username, $this->password, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]);
            } catch (PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
