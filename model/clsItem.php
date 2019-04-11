<?php

class Item {
    
    private $id;
    private $pedido;
    private $produto;
    private $preco;
    private $quantidade;
    
    // Getter
    function getId() {
        return $this->id;
    }
    function getPedido() {
        return $this->pedido;
    }
    function getProduto() {
        return $this->produto;
    }
    function getPreco() {
        return $this->preco;
    }
    function getQuantidade() {
        return $this->quantidade;
    }

    // Setter
    function setId($id) {
        $this->id = $id;
    }
    function setPedido($pedido) {
        $this->pedido = $pedido;
    }
    function setProduto($produto) {
        $this->produto = $produto;
    }
    function setPreco($preco) {
        $this->preco = $preco;
    }
    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    
}
