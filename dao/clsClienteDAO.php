<?php

class ClienteDAO {
    
    public static function inserir($cliente){
        $sql = "INSERT INTO cliente "
                . " ( nome, telefone, cpf, email, senha, "
                . "   foto, idCidade, sexo, admin ) VALUES "
                . " ( '".$cliente->getNome()."' , "
                . "   '".$cliente->getTelefone()."' , "
                . "   '".$cliente->getCpf()."' , "
                . "   '".$cliente->getEmail()."' , "
                . "   '".$cliente->getSenha()."' , "
                . "   '".$cliente->getFoto()."' , "
                . "    ".$cliente->getCidade()->getId()." , "
                . "   '".$cliente->getSexo()."' , "
                . "    ".$cliente->getAdmin()."  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($cliente){
        $sql = "UPDATE cliente SET " 
                . " nome =     '".$cliente->getNome()."' , "
                . " telefone = '".$cliente->getTelefone()."' , "
                . " cpf =      '".$cliente->getCpf()."' , "
                . " email =    '".$cliente->getEmail()."' , "
                . " foto  =    '".$cliente->getFoto()."' , "
                . " idCidade = ".$cliente->getCidade()->getId()." , "
                . " sexo =     '".$cliente->getSexo()."' , "
                . " admin =    ".$cliente->getAdmin()."  "
                . " WHERE id = ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($cliente){
        $sql = "DELETE FROM cliente "
             . " WHERE id =  ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getClientes(){
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
             . " c.email, c.foto, d.id, d.nome, c.sexo, c.admin "
             . " FROM cliente c "
             . " INNER JOIN cidade d "
             . " ON c.idCidade = d.id "
             . " ORDER BY c.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $cod, $nome, $fone, $cpf, $email,
            $foto, $idCidade, $nomeCid, $sexo, $admin) = mysqli_fetch_row($result) ){
            $cidade = new Cidade();
            $cidade->setId( $idCidade );
            $cidade->setNome( $nomeCid );
            $cliente = new Cliente();
            $cliente->setId($cod);
            $cliente->setNome($nome);
            $cliente->setTelefone($fone);
            $cliente->setEmail($email);
            $cliente->setCpf($cpf);
            $cliente->setFoto($foto);
            $cliente->setCidade($cidade);
            $cliente->setSexo($sexo);
            $cliente->setAdmin($admin);
  
            $lista->append($cliente);
        }
        
        return $lista;
    }
    
    
   public static function getClienteById( $id ){
        $sql = " SELECT c.id, c.nome, c.telefone, c.cpf,"
             . " c.email, c.foto, d.id, d.nome, c.sexo, c.admin "
             . " FROM cliente c "
             . " INNER JOIN cidade d "
             . " ON c.idCidade = d.id "
             . " WHERE c.id = ".$id 
             . " ORDER BY c.nome ";
        
        $result = Conexao::consultar($sql);
      
        list( $cod, $nome, $fone, $cpf, $mail,
            $foto, $idCidade, $nomeCid, $sexo, $filhos, $admin) = mysqli_fetch_row($result);
            $cidade = new Cidade();
            $cidade->setId( $idCidade );
            $cidade->setNome( $nomeCid );
            $cliente = new Cliente();
            $cliente->setId($cod);
            $cliente->setNome($nome);
            $cliente->setTelefone($fone);
            $cliente->setEmail($mail);
            $cliente->setCpf($cpf);
            $cliente->setFoto($foto);
            $cliente->setCidade($cidade);
            $cliente->setSexo($sexo);
            $cliente->setFilhos($filhos);
            $cliente->setAdmin($admin);
            
        return $cliente;
    }
  
    public static function logar($login, $senha){
        $sql = " SELECT id, nome, foto, admin "
             . " FROM cliente "
             . " WHERE ( email = '".$login."' OR "
             . "           CPF = '".$login."' )  "
             . "     AND senha = '".$senha."'    ";
        $result = Conexao::consultar($sql);
        
        if( mysqli_num_rows( $result ) > 0 ){
            $dados = mysqli_fetch_assoc( $result );
            $cliente = new Cliente();
            $cliente->setId( $dados['id'] );
            $cliente->setNome( $dados['nome'] );
            $cliente->setFoto( $dados['foto'] );
            $cliente->setAdmin( $dados['admin'] );
            return $cliente;
        } else {
            return NULL;
        }
        
    }
   
    
}












