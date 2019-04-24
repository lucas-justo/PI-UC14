<?php

class Produto{
	private $id;
	private $nome;
	private $preco;
	private $quantidade;
	private $idCategoria;
	private $foto;
    private $descricao;
    private $marca;
    private $promo;

	public function __construct(){

	}

	// Getter
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

	function getIdCategoria(){
		return $this->idCategoria;
	}

	function getFoto(){
		return $this->foto;
	}
	
	function getDescricao(){
        return $this->descricao;
	}
	
	function getPromo(){
        return $this->promo;
	}
	
	function getMarca(){
        return $this->marca;
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

	function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}

	function setFoto($foto){
		$this->foto = $foto;
	}
	
	function setMarca($marca){
        $this->marca = $marca;
	}
	
	function setDescricao($descricao){
        $this->descricao = $descricao;
	}
	
	function setPromo($promo){
        $this->promo = $promo;
	}
}
