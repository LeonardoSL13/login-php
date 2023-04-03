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
    if($username == "exemplo" && $password == "123456") {
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
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<?php if(isset($error)): ?>
		<p><?php echo $error; ?></p>
	<?php endif; ?>
	<form method="post">
		<label for="username">Nome de usuário:</label>
		<input type="text" name="username" required><br><br>
		<label for="password">Senha:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="submit" value="Entrar">
	</form>
</body>
</html>
