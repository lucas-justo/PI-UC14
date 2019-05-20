<?php
class Contato {
	private $id;
	private $vSCONNOME;
	private $vSCONEMAIL;
	private $vSCONTELEFONE;
	private $vSCONENDERECO;
	private $vSCONMENSAGEM;
	
	function getId(){
		return $this->id;
	}
	
	function getNome(){
		return $this->vSCONNOME;
	}
	
	function getEmail(){
		return $this->vSCONEMAIL;
	}
	
	function getTelefone(){
		return $this->vSCONTELEFONE;
	}
	
	function getEndereco(){
		return $this->vSCONENDERECO;
	}
	
	function getMensagem(){
		return $this->vSCONMENSAGEM;
	}
	
	
	function setNome($vSCONNOME){
		$this->vSCONNOME = $vSCONNOME;
	}
	
	function setEmail($vSCONEMAIL){
		$this->vSCONEMAIL = $vSCONEMAIL;
	}
	
	function setTelefone($vSCONTELEFONE){
		$this->vSCONTELEFONE = $vSCONTELEFONE;
	}
	
	function setEndereco($vSCONENDERECO){
		$this->vSCONENDERECO = $vSCONENDERECO;
	}
	
	function setMensagem($vSCONMENSAGEM){
		$this->vSCONMENSAGEM = $vSCONMENSAGEM;
	}
	
	function setId($id){
		$this->id = $id;
	}
	
}