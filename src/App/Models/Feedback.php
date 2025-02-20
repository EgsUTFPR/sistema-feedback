<?php

namespace App\Models;

use App\Database\Conexao;
use PDO;

class Feedback extends Conexao
{
    public function listar()
    {
        $sql = "SELECT * FROM feedbacks ORDER BY id DESC";
        return $this->connect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM feedbacks WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarStatus($id, $status)
    {
        $sql = "UPDATE feedbacks SET status = :status WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindValue(":status", $status);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function cadastrar($titulo, $descricao, $tipo)
{
    $sql = "INSERT INTO feedbacks (titulo, descricao, tipo, status) VALUES (:titulo, :descricao, :tipo, 'recebido')";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindValue(":titulo", $titulo);
    $stmt->bindValue(":descricao", $descricao);
    $stmt->bindValue(":tipo", $tipo);
    return $stmt->execute();
}
}