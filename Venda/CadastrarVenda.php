<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Venda.php';
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
            $venda = new Vendas;
            if(isset($_POST['Cadastrar'])):
                $nota_fiscal = $_POST['nota_fiscal'];
                $data_venda = $_POST['data_venda'];
                $id_cliente = $_POST['id_cliente'];
                $valor_total = $_POST['valor_total'];
                
                $venda->setNota_fiscal($nota_fiscal);
                $venda->setData_venda($data_venda);
                $venda->setId_cliente($id_cliente);
                $venda->setValor_total($valor_total);

                

                if($venda->insert()){
                    echo "Venda inserida com sucesso!";
                }
            endif;
        ?>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="nota_fiscal" id="nota_fiscal"
                    placeholder="Insira a nota fiscal">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="data_venda" id="data_venda"
                    placeholder="Insira a data da venda">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="id_cliente" id="id_cliente"
                    placeholder="Insira o id do cliente">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="valor_total" id="valor_total"
                    placeholder="Insira o valor total">
                <div class="underline"></div>
            </div>
            <input type="submit" name="Cadastrar"/>
        </form>
    </main>
</body>
</html>