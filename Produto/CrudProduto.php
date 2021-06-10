<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudProduto extends DB { //faz herança do arquivo DB
    protected $tabela;
    public $nome;
    public $quantidade;
    public $valor_venda;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setValor_venda($valor_venda) {
        $this->valor_venda = $valor_venda;
    }
        
    public function getValor_venda() {
        return $this->valor_venda;
    }
}