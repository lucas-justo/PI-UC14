<?php

class CidadeDAO {
    
    public static function inserir( $cidade ){
        $sql = "INSERT INTO cidades ( nome ) VALUES "
                . " ( '".$cidade->getNome()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $cidade ){
        $sql =    "UPDATE cidades SET "
                . " nome = '".$cidade->getNome()."' "
                . " WHERE id = ".$cidade->getId();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idCidade ){
        $sql =    "DELETE FROM cidades "
                . " WHERE id = ".$idCidade;
        Conexao::executar($sql);
        
    }
    
    public static function getCidades(){
        $sql = "SELECT id, nome , idEstado FROM cidade ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome , $_idEstado) = mysqli_fetch_row($result) ){
                $cidade = new Cidade();
                $cidade->setId($_id);
                $cidade->setNome($_nome);
				$cidade->setIdEstado($_idEstado);
                $lista->append($cidade);
            }
        }
        return $lista;
    }
    
	  public static function getEstados(){
        $sql = "SELECT id, nome , idPais FROM estado ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome , $_idPais ) = mysqli_fetch_row($result) ){
                $estado = new Estado();
                $estado->setId($_id);
                $estado->setNome($_nome);
				$estado->setIdPais($_idPais);
                $lista->append($estado);
            }
        }
        return $lista;
    }
	
	  public static function getPais(){
        $sql = "SELECT id, nome FROM pais ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome) = mysqli_fetch_row($result) ){
                $pais = new Pais();
                $pais->setId($_id);
                $pais->setNome($_nome);
                $lista->append($pais);
            }
        }
        return $lista;
    }
	
    public static function getCidadeById( $idCidade ){
        $sql = "SELECT id, nome FROM cidades WHERE id = ".$idCidade;
        $result = Conexao::consultar($sql);
        $cidade = NULL;
        if( $result != NULL ){
            list($_id, $_nome) = mysqli_fetch_row($result);
            $cidade = new Cidade();
            $cidade->setId($_id);
            $cidade->setNome($_nome);
        }
        return $cidade;
    }
    
    
}











