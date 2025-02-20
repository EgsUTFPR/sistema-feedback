<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Feedback</title>
</head>
<body>
    <h2>Detalhes do Feedback</h2>
    <a href="/feedbacks">Voltar</a> | <a href="/logout">Sair</a>

    <p><strong>ID:</strong> <?= $feedback['id'] ?></p>
    <p><strong>Título:</strong> <?= htmlspecialchars($feedback['titulo']) ?></p>
    <p><strong>Descrição:</strong> <?= nl2br(htmlspecialchars($feedback['descricao'])) ?></p>
    <p><strong>Tipo:</strong> <?= ucfirst($feedback['tipo']) ?></p>
    <p><strong>Status:</strong> <?= ucfirst($feedback['status']) ?></p>

    <h3>Atualizar Status</h3>
    <form action="/feedback/atualizar" method="POST">
        <input type="hidden" name="id" value="<?= $feedback['id'] ?>">
        <label for="status">Novo Status:</label>
        <select name="status">
            <option value="recebido">Recebido</option>
            <option value="em análise">Em Análise</option>
            <option value="em desenvolvimento">Em Desenvolvimento</option>
            <option value="finalizado">Finalizado</option>
        </select>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
