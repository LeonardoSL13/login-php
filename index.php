<?php
session_start();

// verifica se o usuário já está logado, se sim, redireciona para a página principal
if(isset($_SESSION["username"])) {
    header("Location: main.php");
    exit;
}

// verifica se o formulário de login foi submetido
if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    // verifica se o nome de usuário e a senha estão corretos
    if($username == "teste" && $password == "123") {
        // define a sessão de login e redireciona para a página principal
        $_SESSION["username"] = $username;
        header("Location: main.php");
        exit;
    } else {
        $error = "Nome de usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if(isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" class="form">
            <div class="form-group">
                <label for="username">Nome de usuário:</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Entrar" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
