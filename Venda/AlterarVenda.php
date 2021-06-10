<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Venda.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title>Alterar Venda</title>
</head>
<body>
    <?php
        $id_venda = $_POST['id_venda'];
        $nota_fiscal = $_POST['nota_fiscal'];
        $data_venda = $_POST['data_venda'];
        $id_cliente = $_POST['id_cliente'];
        $valor_total = $_POST['valor_total'];

        
        if(isset($_POST['Concluir'])):
        {
            $venda = new Vendas;
            $venda->setNota_fiscal($nota_fiscal);
            $venda->setData_venda($data_venda);
            $venda->setId_cliente($id_cliente);
            $venda->setValor_total($valor_total);
            $venda->update($id_venda);
        }
        endif;
    ?>

    <main class="container">
        <h2>Alterar</h2>
        <form method='post' action="">

            <div class="input-field">
                <input type="text" name="nota_fiscal" id="nota_fiscal" value="<?php echo $nota_fiscal;?>">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="text" name="data_venda" id="data_venda" value="<?php echo $data_venda;?>">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="text" name="id_cliente" id="id_cliente" value="<?php echo $id_cliente;?>">
                <div class="underline"></div>
            </div>

            <div class="input-field">
                <input type="text" name="valor_total" id="valor_total" value="<?php echo $valor_total;?>">
                <div class="underline"></div>
            </div>
            <input type="hidden" name='id_venda' value="<?php echo $id_venda;?>">
            <input type="submit" name="Concluir"/>
        </form>
    </main>
</body>
</html>

