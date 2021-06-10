<?php

define('SERVER', '127.0.0.1');
define('BANCO', 'vendas');
define('SENHA', '');
define('USER', 'root');
try{

$con = new pdo('mysql:host=' . SERVER . ';dbname=' . BANCO, USER, SENHA);
  echo "conexao ok";
}catch(PDOException $e){
echo "Erro gerado " . $e->getMessage(); 
}



?>