<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Clientes.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stylecadastro.css">
    <title>Alterar Cliente</title>
</head>
<body>
    <?php
        $id_cliente = $_POST['id_cliente'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];

        
        if(isset($_POST['Concluir'])):
        {
            $cliente = new Clientes;
            $cliente->setNome($nome);
            $cliente->setCpf($cpf);
            $cliente->setEmail($email);
            $cliente->update($id_cliente);
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
                <input type="text" name="cpf" id="cpf" value="<?php echo $cpf;?>">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="email" id="email" value="<?php echo $email;?>">
                <div class="underline"></div>
            </div>
            <input type="hidden" name='id_cliente' value="<?php echo $id_cliente;?>">
            <input type="submit" name="Concluir"/>
        </form>
    </main>
</body>
</html>


        