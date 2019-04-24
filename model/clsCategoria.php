<?php

class Categoria{
	private $id;
	private $nome;


	public function __construct(){

	}

	// Getter
	function getId(){
	return $this->id;
	}

	function getNome(){
	return $this->nome;
	}

	// Setter
	function setId($id){
	$this->id = $id;
	}	

	function setNome($nome){
	$this->nome = $nome;
	}
}