<?php
    include_once 'model/clsCategoria.php';
    include_once 'model/clsProduto.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutoDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Corben" />
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Produtos</h1>
        
        <br><br><br>
        
        <?php
           // if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){
        ?>
                <a href="frmProduto.php">
                    <button class="btn btn-large">Cadastrar novo Produto</button></a>
                <br><br>
        <?php
           // }
            
            $lista = ProdutoDAO::getProdutos();
            
            if( $lista->count() == 0 ){
                echo '<h3><b>Nenhum Produto cadastrado!</b></h3>';
            } else {
              
        ?>
       
<div class="container-fluid display">
 <div class="row produtos">

            <?php
                    foreach ($lista as $pro){
                        echo '<div class="col-sm-3"> ';
                        echo '   <img class="img-fluid item" src="fotos_produtos/'.$pro->getFoto().'"/>';
                        echo '   <h1  class="textoprodutos">'.$pro->getNome().'</h1>';
                        
                        $preco = str_replace(".", ",",$pro->getPreco() );
                        echo '   <h4>R$ '.$preco.'</h4>';
                        echo '</div>';
                        
                    }
            ?>
              </div>
  </div>
        
        <?php
        
            }
            
        ?>
        
    </body>
</html>




