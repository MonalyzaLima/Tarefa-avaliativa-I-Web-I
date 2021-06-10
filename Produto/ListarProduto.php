<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Produtos.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylelistar.css">
    <title>Listar Produtos</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="active">
                <th>Nome</th>
                <th>quantidade</th>
                <th>Valor de venda</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php   
                $produto = New Produtos;

                if (isset($_POST['excluir'])){
                    $id_produto = $_POST['id_produto'];
                    $produto->delete($id_produto);
                }
                foreach ($produto->findAll() as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->quantidade;?> </td>
                        <td> <?php echo $value->valor_venda;?> </td>
                        <td>
                            <form method="post" action="AlterarProduto.php">
                                <input name="id_produto" type="hidden" value="<?php echo $value->id_produto;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="quantidade" type="hidden" value="<?php echo $value->quantidade;?>"/>
                                <input name="valor_venda" type="hidden" value="<?php echo $value->valor_venda;?>"/>
                                <button name="alterar" type="submit">Alterar</button>
                            </form>

                            <form method="post" >
                                <input name="id_produto" type="hidden" value="<?php echo $value->id_produto;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>
                    </tr>      
            <?php } ?>
        </tbody>
    </table>
    <form action="CadastrarProduto.php" >
        <button name="cadastrar" type="submit" style="margin-top: 500px; margin-left: -200px; margin-right: 0px;">Cadastrar</button>
    </form>
</body>
</html>