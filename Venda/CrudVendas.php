<?php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php'; //inclui arquivo DB

abstract class CrudVendas extends DB { //faz herança do arquivo DB
    protected $tabela;
    public $nota_fiscal;
    public $data_venda;
    public $id_cliente;
    public $valor_total;

    public function setNota_fiscal($nota_fiscal) {
        $this->nota_fiscal = $nota_fiscal;
    }
        
    public function getNota_fiscal() {
        return $this->nota_fiscal;
    }

    public function setData_venda($data_venda) {
        $this->data_venda = $data_venda;
    }

    public function getData_venda() {
        return $this->data_venda;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }
        
    public function getId_cliente() {
        return $this->id_cliente;
    } 

    public function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }
        
    public function getValor_total() {
        return $this->valor_total;
    } 
}