<?php

class Pedido {
    private $id;
    private $endereco;
    private $pagamento;
    private $horario;
    private $cliente;
    private $valor;

    // Getter
    function getId() {
        return $this->id;
    }
    function getEndereco() {
        return $this->endereco;
    }
    function getPagamento() {
        return $this->pagamento;
    }
    function getHorario() {
        return $this->horario;
    }
    function getCliente() {
        return $this->cliente;
    }
    function getValor() {
        return $this->valor;
    }

    // Setter
    function setId($id) {
        $this->id = $id;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function setPagamento($pagamento) {
        $this->pagamento = $pagamento;
    }
    function setHorario($horario) {
        $this->horario = $horario;
    }
    function setCliente($cliente) {
        $this->cliente = $cliente;
    }
    function setValor($valor) {
        $this->valor = $valor;
    }
    
}
