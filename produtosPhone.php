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
        
        <h1 id="iphone" align="center">Produtos</h1>
        
        <br><br><br>
        
        <?php
           // if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){
        ?>
                <a href="frmProduto.php">
                    <button class="btn btn-large">Cadastrar novo Produto</button></a>
                <br><br>
				<a href="frmCategoria.php">
					<button class="btn btn-large">Cadastrar nova Categoria</button></a>
        <?php
           // }
            
            $lista = ProdutoDAO::getProdutosPhone();
            
            if( $lista->count() == 0 ){
                echo '<h3><b>Nenhum Produto cadastrado!</b></h3>';
            } else {
              
        ?>
       
<div class="container-fluid display">
	<div>
		<input type="checkbox" class="form-check-inline"  id="checkbox1000" onclick="esconderPreco1000()"> Abaixo de R$1000 </input>
		<input type="checkbox" class="form-check-inline"  id="checkbox500" onclick="esconderPreco500()"> Abaixo de R$500 </input>
	</div>
 <div class="row produtos">

            <?php
                    foreach ($lista as $pro){
                        echo '<div class="produtos col-sm-3"  id="'.$pro->getIdCategoria().'"> ';
                        echo '   <img class="img-fluid item" src="fotos_produtos/'.$pro->getFoto().'"/>';
                        echo '   <h1  class="textoprodutos">'.$pro->getNome().'</h1>';
                        
                        $preco = str_replace(".", ",",$pro->getPreco() );
                        echo '   <h4  class="preco">'.$preco.'</h4>';
						
						$desabilita = "";
						if( !isset( $_SESSION['admin']) || !$_SESSION['admin']  ){
							//$desabilita = " hidden ";  
						}
						
						echo ' <a class="nav-item"  href="frmProduto.php?editar&idProduto='.$pro->getId().'" '.$desabilita.' >Editar</a>'; 
                        echo ' <a class="nav-item"  href="controller/salvarProduto.php?excluir&idProduto='.$pro->getId().' " '.$desabilita.' >Excluir</a>'; 
						echo '<a class="nav-item" href="carrinho.php?adicionar&idProduto='.$pro->getId().'">Adicionar</a>';
						echo '</div>';
                        
                    }
            ?>
              </div>
  </div>
        
        <?php
        
            }
            
        ?>
        
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<script>
			function esconderPreco1000(){
				var checkbox = document.getElementById("checkbox1000");
				if(checkbox.checked == true){
					var x = document.getElementsByClassName("preco");
					var y = 0;
					for( i = 0 ; i < x.length ; i++){
						y = parseFloat( x[i].innerHTML );
						if( y >= 1000 ){
							x[i].parentElement.style.display = "none";                         
					
						}
					}
				}else{
					
				var x = document.getElementsByClassName("preco");
				var y = 0;
				for( i = 0 ; i < x.length ; i++){
					y = parseInt( x[i].innerHTML );
					if( y >= 1000 ){
						x[i].parentElement.style.display = "flex";                         
				
					}
				}
					
				}
    }
	
			function esconderPreco500(){
			var checkbox = document.getElementById("checkbox500");
				if(checkbox.checked == true){
					var x = document.getElementsByClassName("preco");
					var y = 0;
					for( i = 0 ; i < x.length ; i++){
						y = parseInt( x[i].innerHTML );
						if( y >= 500 ){
							   x[i].parentElement.style.display = "none";                         
				
						}
					}
				}else{
					
					var x = document.getElementsByClassName("preco");
					var y = 0;
					for( i = 0 ; i < x.length ; i++){
						y = parseInt( x[i].innerHTML );
						if( y >= 500 ){
							   x[i].parentElement.style.display = "flex";                         
				
						}
					}		
					
					
				}
		
    }
		</script>
		
		
    </body>
</html>




