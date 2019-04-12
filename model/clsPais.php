<?php

class Pais {
    private $id;
    private $nome;
    
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
    
    // Setter
    function setId($id){
        $this->id = $id;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
}
