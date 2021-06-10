<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
    <main class="container">
        <h2>Seja bem-vindo!</h2>
        <form method='post' action="Cliente/ListarCliente.php">
            <button name="listar" type="submit">Listar Clientes</button>
        </form>
        <form method='post' action="Produto/ListarProduto.php">
            <button name="listar" type="submit">Listar Produto</button>
        </form>
        <form method='post' action="Venda/ListarVenda.php">
            <button name="listar" type="submit">Listar Venda</button>
        </form>
    </main>
</body>
</html>