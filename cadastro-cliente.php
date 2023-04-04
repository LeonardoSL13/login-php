<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente - Banco XYZ</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>
<body>
    <!-- cabeçalho -->
    <div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Banco Sweet</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item"><a class="nav-link " href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                <li class="nav-item"><a class="nav-link active " href="cadastro-cliente.php"><i class="fas fa-user"></i><span>Cadastro de Cliente</span></a></li>
                <li class="nav-item"><a class="nav-link " href="cadastro-conta.php"><i class="fas fa-user"></i><span>Cadastro de Conta</span></a></li>
                <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>Table</span></a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            
        </div>
    </nav>
    <div class="cadastro">
        <h2>Cadastro de Cliente</h2>
        <form action="cadastro-cliente.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html>
