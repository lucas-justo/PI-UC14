<?php
    session_start();
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutoDAO.php';
    include_once 'model/clsProduto.php';
    include_once 'model/clsCategoria.php';

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
        
        <h1 align="center">Carrinho de Compras</h1>
        
        <?php
            if( !isset($_SESSION['carrinho']) || 
                    count( $_SESSION['carrinho'] ) == 0  ){
                echo '<h3>Seu carrinho está vazio!</h3>';
            } else {
                echo '<table border="1" >';
                echo '  <tr>';
                echo '      <th>Código</th>';
                echo '      <th>Foto</th>';
                echo '      <th>Nome</th>';
                echo '      <th>Quantidade</th>';
                echo '      <th>Preço</th>';
                echo '      <th>Subtotal</th>';
                echo '      <th>Remover</th>';
                echo '  </tr>';
                $total = 0;
                foreach ($_SESSION['carrinho'] as $id => $qtd) {
                    $produto = ProdutoDAO::getProdutoById($id);
                    echo ' <tr>';
                    echo '      <td>'.$produto->getId().'</td>';
                    echo '      <td><img width="50px" src="fotos_produtos/'.$produto->getFoto().'" /></td>';
                    echo '      <td>'.$produto->getNome().'</td>';
                    
                    echo '      <td>'.$qtd.' | <a href="carrinho.php?remover&'
                            . 'idProduto='.$produto->getId().'"><button>-</button></a> | '
                            . '<a href="carrinho.php?adicionar&'
                            . 'idProduto='.$produto->getId().'"><button>+</button></a> | </td>';
                    
                    echo '      <td>R$ '.$produto->getPreco().'</td>';
                    $subtotal = $qtd * $produto->getPreco();
                    $total += $subtotal;
                    echo '      <td>R$ '.$subtotal.'</td>';
                    echo '      <td><a href="carrinho.php?excluir&idProduto='
                            .$produto->getId().'" ><button class="btn">Excluir</button></a></td>';
                    echo ' </tr>';
                }
                echo '  <tr>';
                echo '      <th colspan="4">Total:</th>';
                echo '      <th colspan="3">R$ '.$total.'</th>';
                echo '  </tr>';
                echo '</table>';
                ?>
				
				<div class="ovo">
				<h1 class="finalizarpedido">FINALIZAR</h1>
				<h1 class="finalizarpedido2"> PEDIDO</h1>
				<img src="sorvete.png"/>
				</div>
				
				<?php
				
              
            }
            
        
        ?>
    </body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
$(".ovo").on('click', function(){
		 window.location = 'finalizarPedido.php';    
	});
	
</script>







