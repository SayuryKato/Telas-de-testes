<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2>Login:</h2>
            <div class="input-group">
                <label for="nome">Usuário:</label>
                <input type="text" id="nome" name="nome" >
            </div>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" >
            </div>
            <div class="input-group">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>

</body>
</html>
