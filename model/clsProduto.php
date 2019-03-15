<?php

class Produto{
	private $id;
	private $nome;
	private $preco;
	private $quantidade;
	private $categoria;
	private $foto;


	public function __construct(){

	}

	// Guetter
	function getId(){
	return $this->id;
	}

	function getNome(){
	return $this->nome;
	}

	function getPreco(){
	return $this->preco;
	}

	function getQuantidade(){
		return $this->quantidade;
	}

	function getCatedoria(){
		return $this->categoria;
	}

	function getFoto(){
		return $this->foto;
	}

	// Setter
	function setId($id){
		$this->id = $id;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setPreco($preco){
		$this->preco = $preco;
	}

	function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	function setCategoria($categoria){
		$this->categoria = $categoria;
	}

	function setFoto($foto){
		$this->foto = $foto;
	}
}