<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once 'Clientes.php';
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
            $cliente = new Clientes;
            if(isset($_POST['Cadastrar'])):
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $email = $_POST['email'];

                $cliente->setNome($nome);
                $cliente->setCpf($cpf);
                $cliente->setEmail($email);

                if($cliente->insert()){
                    echo "Cliente ". $nome. " inserido com sucesso!";
                }
            endif;
        ?>
        <form method='post' action="">
            <div class="input-field">
                <input type="text" name="nome" id="nome"
                    placeholder="Insira seu nome">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="cpf" id="cpf"
                    placeholder="Insira seu CPF">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text" name="email" id="email"
                    placeholder="Insira seu e-mail">
                <div class="underline"></div>
            </div>
            <input type="submit" name="Cadastrar">
        </form>
    </main>
</body>
</html>