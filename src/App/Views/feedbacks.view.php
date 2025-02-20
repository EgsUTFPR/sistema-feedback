<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Feedbacks</title>
</head>
<body>
    <h2>Lista de Feedbacks</h2>
    <a href="/logout">Sair</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Tipo</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedbacks as $feedback): ?>
                <tr>
                    <td><?= $feedback['id'] ?></td>
                    <td><?= htmlspecialchars($feedback['titulo']) ?></td>
                    <td><?= ucfirst($feedback['tipo']) ?></td>
                    <td><?= ucfirst($feedback['status']) ?></td>
                    <td>
                        <a href="/feedbacks/<?= $feedback['id'] ?>">Detalhes</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
