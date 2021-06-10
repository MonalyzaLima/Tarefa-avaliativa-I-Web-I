<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Venda.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/stylelistarvenda.css">
    <title>Listar Vendas</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="active">
                <th>Nota fiscal</th>
                <th>Data da venda</th>
                <th>ID do cliente</th>
                <th>Valor_total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php   
                $venda = New Vendas;

                if (isset($_POST['excluir'])){
                    $id_venda = $_POST['id_venda'];
                    $venda->delete($id_venda);
                }
                foreach ($venda->findAll() as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value->nota_fiscal;?> </td>
                        <td> <?php echo $value->data_venda;?> </td>
                        <td> <?php echo $value->id_cliente;?> </td>
                        <td> <?php echo $value->valor_total;?> </td>

                        <td>
                            <form method="post" action="AlterarVenda.php">  
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>                 
                                <input name="nota_fiscal" type="hidden" value="<?php echo $value->nota_fiscal;?>"/>
                                <input name="data_venda" type="hidden" value="<?php echo $value->data_venda;?>"/>
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>
                                <input name="valor_total" type="hidden" value="<?php echo $value->valor_total;?>"/>
                                <button name="alterar" type="submit">Alterar</button>
                            </form>

                            <form method="post" >
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>

                            <form method="post" action="ListarItens_venda.php">
                                <input name="id_venda" type="hidden" value="<?php echo $value->id_venda;?>"/>
                                <button name="info" type="submit" >Abrir </button>
                            </form>
                        </td>
                    </tr>      
            <?php } ?>
        </tbody>
    </table>
    <form action="CadastrarVenda.php" >
        <button name="cadastrar" type="submit" style="margin-top: 560px; margin-left: -300px; margin-right: 0px;">Cadastrar</button>
    </form>
</body>
</html>