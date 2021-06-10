<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudItens_Venda extends DB { //faz herança do arquivo DB
    protected $tabela;
    public $quantidade;
    public $valor_unitario;
    public $id_produto;

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
        
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setValor_unitario($valor_unitario) {
        $this->valor_unitario = $valor_unitario;
    }

    public function getValor_unitario() {
        return $this->valor_unitario;
    }

    public function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }
        
    public function getId_produto() {
        return $this->id_produto;
    } 

    public function setId_venda($id_venda) {
        $this->id_venda = $id_venda;
    }
        
    public function getId_venda() {
        return $this->id_venda;
    } 


}