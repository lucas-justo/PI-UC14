<?php

class Cidade {
    private $id;
    private $nome;
    private $idEstado;
    
    public function __construct($id = NULL, $nome = NULL){
        $this->id = $id;
        $this->nome = $nome;
    }
    
    // Getter
    function getId(){
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }
    
    function getIdEstado() {
        return $this->$idEstado;
    }
    
    // Setter
    function setId($id){
        $this->id = $id;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setIdEstado($idEstado){
        $this->idEstado = $idEstado;
    }
    
}
