<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Produtos.php';
?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/stylecadastro.css">
</head>
<body>
    <main class="container">
        <h2>Cadastro</h2>
        <?php
            $produto = new Produtos;
            if(isset($_POST['Cadastrar'])):
                $nome = $_POST['nome'];
                $quantidade = $_POST['quantidade'];
                $valor_venda = $_POST['valor_venda'];

                $produto->setNome($nome);
                $produto->setQuantidade($quantidade);
                $produto->setValor_venda($valor_venda);

                if($produto->insert()){
                    echo "produto ". $nome. " inserido com sucesso!";
                }
            endif;
        ?>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="nome" id="nome"
                    placeholder="Insira o nome do produto">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="quantidade" id="quantidade"
                    placeholder="Insira a quantidade">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="valor_venda" id="valor_venda"
                    placeholder="Insira o valor de venda">
                <div class="underline"></div>
            </div>
            <input type="submit" name="Cadastrar"/>
        </form>
    </main>
</body>
</html>