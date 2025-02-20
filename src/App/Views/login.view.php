<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login do Administrador</h2>
    <?php if (isset($_GET['erro'])): ?>
        <p style="color:red;">Usuário ou senha inválidos!</p>
    <?php endif; ?>
    
    <form action="/autenticar" method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario" required>
        
        <label>Senha:</label>
        <input type="password" name="senha" required>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
