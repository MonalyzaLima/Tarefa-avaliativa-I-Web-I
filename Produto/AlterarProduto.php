<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Produtos.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title>Alterar Produto</title>
</head>
<body>
    <?php
        $id_produto = $_POST['id_produto'];
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $valor_venda = $_POST['valor_venda'];

        if(isset($_POST['Concluir'])):
        {
            $produto = new Produtos;
            $produto->setNome($nome);
            $produto->setQuantidade($quantidade);
            $produto->setValor_venda($valor_venda);
            $produto->update($id_produto);
        }
        endif;
    ?>

    <main class="container">
        <h2>Alterar</h2>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="nome" id="nome" value="<?php echo $nome;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="quantidade" id="quantidade" value="<?php echo $quantidade;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="valor_venda" id="valor_venda" value="<?php echo $valor_venda;?>">
                <div class="underline"></div>
            </div>
            <input type="hidden" name='id_produto' value="<?php echo $id_produto;?>">
            <input type="submit" name="Concluir"/>
        </form>
    </main>


        