<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Feedback</title>
</head>
<body>
    <h2>Enviar um Feedback</h2>

    <form action="/feedback/cadastrar" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="bug">Bug</option>
            <option value="sugestão">Sugestão</option>
            <option value="reclamação">Reclamação</option>
            <option value="feedback">Feedback</option>
        </select>

        <button type="submit">Enviar</button>
    </form>

    <a href="/login">Área Administrativa</a>
</body>
</html>
