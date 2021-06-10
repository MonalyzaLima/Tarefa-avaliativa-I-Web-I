<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'itens_venda.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/stylelistarvenda.css">
    <title>Listar Clientes</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="active">
                <th>quantidade</th>
                <th>Valor unitário</th>
                <th>ID do produto</th>
                <th>ID da venda</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php   
                $itens_venda = New Itens_venda;

                if (isset($_POST['excluir'])){
                    $id_itens_venda = $_POST['id_itens_venda'];
                    $itens_venda->delete($id_itens_venda);
                }
                foreach ($itens_venda->findAll() as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value->quantidade;?> </td>
                        <td> <?php echo $value->valor_unitario;?> </td>
                        <td> <?php echo $value->id_produto;?> </td>
                        <td> <?php echo $value->id_venda;?> </td>

                        <td>
                            <form method="post" action="AlterarItens_venda.php">
                                <input name="id_itens_venda" type="hidden" value="<?php echo $value->id_itens_venda;?>"/>                 
                                <input name="quantidade" type="hidden" value="<?php echo $value->quantidade;?>"/>
                                <input name="valor_unitario" type="hidden" value="<?php echo $value->valor_unitario;?>"/>
                                <input name="id_produto" type="hidden" value="<?php echo $value->id_produto;?>"/>
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>

                                <button name="alterar" type="submit">Alterar</button>
                            </form>
                            <form method="post" >
                                <input name="id_itens_venda" type="hidden" value="<?php echo $value->id_itens_venda;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>
                    </tr>      
            <?php } ?>
        </tbody>
    </table>
    <form action="CadastrarItens_venda.php" >
        <button name="cadastrar" type="submit" style="margin-top: 560px; margin-left: -300px; margin-right: 0px;">Cadastrar</button>
    </form>
</body>
</html>