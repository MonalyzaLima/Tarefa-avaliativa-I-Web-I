<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Itens_venda.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title>Alterar item</title>
</head>
<body>
    <?php
        $id_itens_venda = $_POST['id_itens_venda'];
        $quantidade = $_POST['quantidade'];
        $valor_unitario = $_POST['valor_unitario'];
        $id_produto = $_POST['id_produto'];
        $id_venda = $_POST['id_venda'];

        if(isset($_POST['Concluir'])):
        {
            $itens_venda = new Itens_venda;
            $itens_venda->setQuantidade($quantidade);
            $itens_venda->setValor_unitario($valor_unitario);
            $itens_venda->setId_produto($id_produto);
            $itens_venda->setId_produto($id_venda);
            $itens_venda->update($id_itens_venda);
        }
        endif;
    ?>

    <main class="container">
        <h2>Alterar</h2>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="quantidade" id="quantidade" value="<?php echo $quantidade;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="valor_unitario" id="cpf" value="<?php echo $valor_unitario;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="id_produto" id="id_produto" value="<?php echo $id_produto;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="id_venda" id="id_venda" value="<?php echo $id_venda;?>">
                <div class="underline"></div>
            </div>
            <input type="hidden" name='id_itens_venda' value="<?php echo $id_itens_venda;?>">
            <input type="submit" name="Concluir"/>
        </form>
    </main>


        