<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Clientes.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylelistar.css">
    <title>Listar Clientes</title>
</head>
<body>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="active">
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php   
                $cliente = New Clientes;

                if (isset($_POST['excluir'])){
                    $id_cliente = $_POST['id_cliente'];
                    $cliente->delete($id_cliente);
                }
                foreach ($cliente->findAll() as $key => $value) { ?>
                    <tr>
                        <td> <?php echo $value->nome;?> </td>
                        <td> <?php echo $value->cpf;?> </td>
                        <td> <?php echo $value->email;?> </td>
                        <td>
                            <form method="post" action="AlterarCliente.php">
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>                  
                                <input name="nome" type="hidden" value="<?php echo $value->nome;?>"/>
                                <input name="cpf" type="hidden" value="<?php echo $value->cpf;?>"/>
                                <input name="email" type="hidden" value="<?php echo $value->email;?>"/>
                                <button name="alterar" type="submit">Alterar</button>
                            </form>

                            <form method="post" >
                                <input name="id_cliente" type="hidden" value="<?php echo $value->id_cliente;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>  
                    </tr>      
            <?php } ?>
        </tbody>
    </table>
    <form action="CadastrarCliente.php" >
        <button name="cadastrar" type="submit" style="margin-top: 500px; margin-left: -300px; margin-right: 0px;">Cadastrar</button>
    </form>
</body>
</html>