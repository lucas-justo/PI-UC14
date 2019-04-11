<?php

class ProdutoDAO {
    
    public static function inserir($produto){
        $sql = "INSERT INTO produto "
                . " ( nome, foto, preco, quantidade, idCategoria ) VALUES "
                . " ( '".$produto->getNome()."' , "
                . "   '".$produto->getFoto()."' , "
                . "    ".$produto->getPreco()." , "
                . "    ".$produto->getQuantidade()." , "
                . "    ".$produto->getCategoria()->getId()."  "
                . "  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($produto){
        $sql = "UPDATE produto SET " 
                . " nome =      '".$produto->getNome()."' , "
                . " foto =      '".$produto->getFoto()."' , "
                . " preco =      ".$produto->getPreco()." , "
                . " quantidade = ".$produto->getQuantidade()." , "
                . " idCategoria =    ".$produto->getCategoria()->getId()."  "
                . " WHERE id = ".$produto->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($cliente){
        $sql = "DELETE FROM produto "
             . " WHERE id =  ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getProdutos(){
        $sql = " SELECT p.id, p.nome, p.foto, p.preco, p.quantidade, c.id, c.nome "
             . " FROM produto p "
             . " INNER JOIN categoria c "
             . " ON p.idCategoria = c.id "
             . " ORDER BY p.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $id, $nome, $foto, $preco, $qtd , $idCategoria , $nomeCat) = mysqli_fetch_row($result) ){
            $categoria = new Categoria();
            $categoria->setId( $idCategoria );
            $categoria->setNome( $nomeCat );
            
            $produto = new Produto();
            $produto->setId($id);
            $produto->setNome($nome);
            $produto->setFoto($foto);
            $produto->setPreco($preco);
            $produto->setQuantidade($qtd);
            $produto->setCategoria($idCategoria);
           
  
            $lista->append($produto);
        }
        
        return $lista;
    }
    
    
   public static function getProdutoById( $id ){
         $sql = " SELECT p.id, p.nome, p.foto, p.preco, p.quantidade, c.id, c.nome "
             . " FROM produto p "
             . " INNER JOIN categoria c "
             . " ON p.idCategoria = c.id "
             . " WHERE p.id = ".$id ;
        
        $result = Conexao::consultar($sql);
      
        list( $id, $nome, $foto, $preco, $qtd, $idCategoria, $nomeCat) = mysqli_fetch_row($result);
            $categoria = new Categoria();
            $categoria->setId( $idCat );
            $categoria->setNome( $nomeCat );
            
            $produto = new Produto();
            $produto->setId($id);
            $produto->setNome($nome);
            $produto->setFoto($foto);
            $produto->setPreco($preco);
            $produto->setQuantidade($qtd);
            $produto->setCategoria($idCategoria);
            
        return $produto;
    }
  
    
   
    
}












