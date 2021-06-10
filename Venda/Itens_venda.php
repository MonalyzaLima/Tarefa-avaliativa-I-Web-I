<?php

/**
* herda da classe crudAlunos
* contem metodos basicos para criar, deletar, Lê e apagar dados no BD
*/

require_once 'CrudItens_venda.php';

class Itens_venda extends CrudItens_venda {
    
    protected $tabela = 'itens_venda'; //define a tabela do banco
    
    //busca 1 item
    public function findUnit($id_itens_venda) {
    $sql = "SELECT * FROM $this->tabela WHERE id_itens_venda = :id_itens_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
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
    $sql = "INSERT INTO $this->tabela (quantidade, valor_unitario, id_produto, id_venda) 
    VALUES (:quantidade, :valor_unitario, :id_produto, :id_venda)";
    $stm = DB::prepare($sql);
    $stm->bindParam(':quantidade', $this->quantidade);
    $stm->bindParam(':valor_unitario', $this->valor_unitario);
    $stm->bindParam(':id_produto', $this->id_produto);
    $stm->bindParam(':id_venda', $this->id_venda);
    return $stm->execute();
    }

    //update de itens
    public function update($id_itens_venda) {
    $sql = "UPDATE $this->tabela SET quantidade = :quantidade, valor_unitario = :valor_unitario, id_produto = :id_produto, id_venda = :id_venda WHERE id_itens_venda = :id_itens_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
    $stm->bindParam(':quantidade', $this->nota_fiscal);
    $stm->bindParam(':valor_unitario', $this->data_venda);
    $stm->bindParam(':id_produto', $this->id_produto);
    $stm->bindParam(':id_venda', $this->id_venda);
    return $stm->execute();
    }

    //deleta 1 item
    public function delete($id_itens_venda) {
    $sql = "DELETE FROM $this->tabela WHERE id_itens_venda = :id_itens_venda";
    $stm = DB::prepare($sql);
    $stm->bindParam(':id_itens_venda', $id_itens_venda, PDO::PARAM_INT);
    return $stm->execute();
    }
}