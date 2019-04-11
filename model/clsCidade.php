<?php

class Cidade {
    private $id;
    private $nome;
    private $estado;
    
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
    
    function getEstado() {
        return $this->$estado;
    }
    
    // Setter
    function setId($id){
        $this->id = $id;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setEstado($estado){
        $this->estado = $estado;
    }
    
}
