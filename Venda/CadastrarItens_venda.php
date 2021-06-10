<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Itens_venda.php';
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
            $itens_venda = new Itens_venda;
            if(isset($_POST['Cadastrar'])):
                $quantidade = $_POST['quantidade'];
                $valor_unitario = $_POST['valor_unitario'];
                $id_produto = $_POST['id_produto'];
                $id_venda = $_POST['id_venda'];
                
                $itens_venda->setQuantidade($quantidade);
                $itens_venda->setValor_unitario($valor_unitario);
                $itens_venda->setId_produto($id_produto);
                $itens_venda->setId_venda($id_venda);
                

                if($itens_venda->insert()){
                    echo "Item inserido com sucesso!";
                }
            endif;
        ?>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="quantidade" id="quantidade"
                    placeholder="Insira a quantidade">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="valor_unitario" id="valor_unitario"
                    placeholder="Insira o valor unitário">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="id_produto" id="id_produto"
                    placeholder="Insira o id do produto">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="id_venda" id="id_venda"
                    placeholder="Insira o id da venda">
                <div class="underline"></div>
            </div>
            <input type="submit" name="Cadastrar"/>
        </form>
    </main>
</body>
</html>