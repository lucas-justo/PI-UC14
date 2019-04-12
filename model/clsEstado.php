<?php

class Estado {
    private $id;
    private $nome;
    private $idPais;
    
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
    
    function getIdPais() {
        return $this->$idPais;
    }
    
    // Setter
    function setId($id){
        $this->id = $id;
    }
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setIdPais($idPais){
        $this->idPais = $idPais;
    }
    
}
