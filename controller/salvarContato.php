<?php
include_once '../model/clsContato.php';
include_once '../dao/clsContatoDAO.php';
include_once '../dao/clsConexao.php';


if( isset( $_REQUEST['inserir'] ) ){
    $contato = new Contato();
    $contato->setNome( $_POST['vSCONNOME']  );
	$contato->setTelefone( $_POST['vSCONTELEFONE']  );
	$contato->setEndereco( $_POST['vSCONENDERECO']  );
	$contato->setEmail( $_POST['vSCONEMAIL']  );
	$contato->setMensagem( $_POST['vSCONMENSAGEM']  );
    
    ContatoDAO::inserir($contato);
    
    header("Location: ../contato.php");
}


