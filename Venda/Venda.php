<?php

/**
* herda da classe crudAlunos
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/
require_once 'CrudVendas.php';

class Vendas extends CrudVendas {
    
    protected $tabela = 'venda'; //define a tabela do banco
    
    //busca 1 item
    public function findUnit($id_venda) {
    $sql = "SELECT * FROM $this->tabela WHERE id_venda = :id_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_venda', $id_venda, PDO::PARAM_INT);
    $stm->execute();
    return $stm->fetch();
    }

    //busca todos os itens
    public function findAll() {
    $sql = "SELECT * FROM $this->tabela";
    $stm = DB::prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
    }

    //faz insert
    public function insert() {
    $sql = "INSERT INTO $this->tabela (nota_fiscal, data_venda, id_cliente, valor_total) VALUES (:nota_fiscal, :data_venda, :id_cliente, :valor_total)";
    $stm = DB::prepare($sql);
    $stm->bindParam(':nota_fiscal', $this->nota_fiscal);
    $stm->bindParam(':data_venda', $this->data_venda);
    $stm->bindParam(':id_cliente', $this->id_cliente);
    $stm->bindParam(':valor_total', $this->valor_total);
    return $stm->execute();
    }

    //update de itens
    public function update($id_venda) {
    $sql = "UPDATE $this->tabela SET nota_fiscal = :nota_fiscal, data_venda = :data_venda, 
    id_cliente = :id_cliente, valor_total = :valor_total WHERE id_venda = :id_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_venda', $id_venda, PDO::PARAM_INT);
    $stm->bindParam(':nota_fiscal', $this->nota_fiscal);
    $stm->bindParam(':data_venda', $this->data_venda);
    $stm->bindParam(':id_cliente', $this->id_cliente);
    $stm->bindParam(':valor_total', $this->valor_total);
    return $stm->execute();
    }

    //deleta 1 item
    public function delete($id_venda) {
    $sql = "DELETE FROM $this->tabela WHERE id_venda = :id_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_venda', $id_venda, PDO::PARAM_INT);
    return $stm->execute();
    }
}