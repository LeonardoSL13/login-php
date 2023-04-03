<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente - Banco XYZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- cabeçalho -->
    <header class="header">
        <h1>Banco XYZ</h1>
        <nav>
            <a href="main.php">Voltar</a>
            <a href="logout.php">Sair</a>
        </nav>
    </header>

    <!-- cadastro de cliente -->
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
