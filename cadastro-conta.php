<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Conta - Banco XYZ</title>
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

    <!-- cadastro de conta -->
    <div class="cadastro">
        <h2>Cadastro de Conta</h2>
        <form action="cadastro-conta.php" method="post">
            <label for="cliente">Cliente:</label>
            <select id="cliente" name="cliente" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["nome"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="tipo">Tipo de Conta:</label>
            <select id="tipo" name="tipo" required>
                <option value="corrente">Conta Corrente</option>
                <option value="poupanca">Conta Poupança</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html>
