<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Solicitação de Empréstimo - Banco XYZ</title>
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

    <!-- solicitação de empréstimo -->
    <div class="cadastro">
        <h2>Solicitação de Empréstimo</h2>
        <form action="solicitacao-emprestimo.php" method="post">
            <label for="cliente">Cliente:</label>
            <select id="cliente" name="cliente" required>
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["nome"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="conta">Conta:</label>
            <select id="conta" name="conta" required>
                <?php foreach ($contas as $conta): ?>
                    <option value="<?php echo $conta["id"]; ?>"><?php echo $conta["tipo"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="valor">Valor:</label>
            <input type="number" id="valor" name="valor" required>
            <button type="submit">Solicitar</button>
        </form>
    </div>

</body>
</html>