<?php

class ContatoDAO {
    
    public static function inserir( $contato ){
        $sql = "INSERT INTO contato ( nome , email , telefone , endereco , mensagem ) VALUES "
                . " ( '".$contato->getNome()."' , '".$contato->getEmail()."' , '".$contato->getTelefone()."' , '".$contato->getEndereco()."' , '".$contato->getMensagem()."' ); ";
        Conexao::executar($sql);
        
    }
    
    
    public static function excluir( $idcontato ){
        $sql =    "DELETE FROM contato "
                . " WHERE id = ".$idcontato;
        Conexao::executar($sql);
        
    }
    
    public static function getcontatos(){
        $sql = "SELECT id, nome,email,telefone,endereco,mensagem FROM contato ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome , $_email , $_telefone , $_endereco , $_mensagem) = mysqli_fetch_row($result) ){
                $contato = new contato();
                $contato->setId($_id);
                $contato->setNome($_nome);
				$contato->setNome($_email);
				$contato->setNome($_telefone);
				$contato->setNome($_endereco);
				$contato->setNome($_mensagem);
                $lista->append($contato);
            }
        }
        return $lista;
    }
    
    
}











