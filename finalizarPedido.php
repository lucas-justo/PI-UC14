<?php
    session_start();
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
        <h1 align="center">Finalizar Pedido</h1>
        
        <br><br><br>
        <?php
            if( isset($_SESSION['logado']) && $_SESSION['logado'] ){
                ?>
                <form action="controller/salvarPedido.php?inserir" 
                      method="POST" >
                    
                    <label>Endereço: </label>
                    <input type="text" name="txtEndereco" maxlength="50" />
                    <br> <br>
                    <label>Forma de Pagamento: </label>
                    <select name="pagamento">
                        <option value="0">Selecione</option>
                        <option value="boleto">Boleto</option>
                        <option value="credito01">Crédito 1X</option>
                        <option value="credito02">Crédito 2X</option>
                        <option value="credito03">Crédito 3X</option>
                    </select>
                    <br> <br>
                    <input type="submit" value="Finalizar Compra" />
                </form>
        
                <?php
            } else {
                echo '<h3>Você deve realizar seu login 	&uarr; </h3>';
            }
        ?>
        
        
    </body>
</html>
