<?php
    include_once 'model/clsCategoria.php';
    include_once 'model/clsProduto.php';
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutoDAO.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Produtos</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Produtos</h1>
        
        <br><br><br>
        
        <?php
            if( isset( $_SESSION['admin']) && $_SESSION['admin'] ){
        ?>
                <a href="frmProduto.php">
                    <button>Cadastrar novo Produto</button></a>
                <br><br>
        <?php
            }
            
            $lista = ProdutoDAO::getProdutos();
            
            if( $lista->count() == 0 ){
                echo '<h3><b>Nenhum Produto cadastrado!</b></h3>';
            } else {
              
        ?>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Foto</th>
                <th>Nome do Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Editar</th>
                <th>Excluir</th>
                <th>Comprar</th>
            </tr>
            
            <?php
                    foreach ($lista as $pro){
                        echo '<tr> ';
                        echo '   <td>'.$pro->getId().'</td>';
                        echo '   <td><img src="fotos_produtos/'.$pro->getFoto().'" width="30px" /></td>';
                        echo '   <td>'.$pro->getNome().'</td>';
                        
                        $preco = str_replace(".", ",",$pro->getPreco() );
                        echo '   <td>R$ '.$preco.'</td>';
                        
                        $qtd = str_replace(".", ",",$pro->getQuantidade() );
                        echo '   <td>'.$qtd.'</td>';
                        
                        echo '   <td>'.$pro->getCategoria()->getNome().'</td>';
                        
                        $desabilita = "";
                        if( !isset( $_SESSION['admin']) || !$_SESSION['admin']  ){
                            $desabilita = " disabled ";
                        }
                        
                        echo '   <td><a href="frmProduto.php?editar&idProduto='.$pro->getId().'" ><button '.$desabilita.' >Editar</button></a></td>';
                        echo '   <td><a href="controller/salvarProduto.php?excluir&idProduto='.$pro->getId().'" ><button '.$desabilita.' >Excluir</button></a></td>';
                        echo '   <td><a href="carrinho.php?adicionar&idProduto='
                                .$pro->getId().'" ><button>Adicionar</button></a></td>';
                        
                        echo '</tr>';
                        
                    }
            ?>
            
        </table>
        
        <?php
        
            }
            
        ?>
        
    </body>
</html>




