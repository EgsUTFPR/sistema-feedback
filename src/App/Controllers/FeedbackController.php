<?php

namespace App\Controllers;

use App\Auth\Auth;
use App\Models\Feedback;

class FeedbackController
{
    public function __construct()
    {
        Auth::verificarAcesso();
    }

    public function index()
    {
        $feedbacks = (new Feedback())->listar();
        require_once __DIR__ . "/../../views/feedbacks.view.php";
    }

    public function show($id)
    {
        $feedback = (new Feedback())->buscarPorId($id);
        require_once __DIR__ . "/../../views/feedbacks-show.view.php";
    }
    public function store()
    {
        $titulo = $_POST['titulo'] ?? null;
        $descricao = $_POST['descricao'] ?? null;
        $tipo = $_POST['tipo'] ?? null;
    
        if ($titulo && $descricao && $tipo) {
            (new Feedback())->cadastrar($titulo, $descricao, $tipo);
        }
    
        header("Location: /");
    }
    


    public function update()
    {
        $id = $_POST['id'] ?? null;
        $status = $_POST['status'] ?? null;

        if ($id && $status) {
            (new Feedback())->atualizarStatus($id, $status);
        }

        header("Location: /feedbacks/{$id}");
    }
}
