<?php
session_start();

// verifica se o usuário está logado, se não, redireciona para a página de login
if(!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- cabeçalho -->
    <header class="header">
        <h1>Banco XYZ</h1>
        <nav>
            <a href="logout.php">Sair</a>
        </nav>
    </header>

    <!-- dashboard -->
    <div class="dashboard">
        <nav>
            <a href="#">Dashboard</a>
            <a href="cadastro-cliente.php">Cadastro de Cliente</a>
            <a href="cadastro-conta.php">Cadastro de Conta</a>
            <a href="solicitacao-emprestimo.php">Solicitação de Empréstimo</a>
        </nav>
        <div class="content">
            <h2>Bem-vindo(a) <?php echo $_SESSION["username"]; ?>!</h2>
            <p>Esta é a página principal do Banco XYZ. Utilize o menu acima para navegar pelas funcionalidades.</p>
        </div>
    </div>

</body>
</html>