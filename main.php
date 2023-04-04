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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>
<body  id="page-top">
    <!-- cabeçalho -->
    <!-- <header class="header">
        <h1>Banco XYZ</h1>
        <nav>
            <a href="logout.php">Sair</a>
        </nav>
    </header> -->

    <!-- dashboard -->
    <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Banco Sweet</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link" href="cadastro-cliente.php"><i class="fas fa-user"></i><span>Cadastro de Cliente</span></a></li>
                <li class="nav-item"><a class="nav-link" href="cadastro-conta.php"><i class="fas fa-user"></i><span>Cadastro de Conta</span></a></li>
                <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>Table</span></a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            
        </div>
    </nav>
    <div id="content">
        <div class="d-flex flex-column" id="content-wrapper">
            <h2>Bem-vindo(a) <?php echo $_SESSION["username"]; ?>!</h2>
            <p>Esta é a página principal do Banco Sweet. Utilize o menu acima para navegar pelas funcionalidades.</p>
        </div>     
    </div>
</div>
</body>
</html>