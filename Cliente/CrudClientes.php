<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudClientes extends DB { //faz herança do arquivo DB
    protected $tabela;
    public $nome;
    public $cpf;
    public $email;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
        
    public function getEmail() {
        return $this->email;
    }
}