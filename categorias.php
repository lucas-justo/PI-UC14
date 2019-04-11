<?php
include_once 'model/clsCategoria.php';
include_once 'dao/clsCategoriaDAO.php';
include_once 'dao/clsConexao.php';
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
        
        <h1 align="center">Categorias</h1>
        
        <br><br><br>
        
        <form action="controller/salvarCategoria.php?inserir" method="POST" >
            <label>Nome: </label>
            <input type="text" name="txtNome" />
            <input type="submit" value="Salvar" />
        </form>
        
        <hr>
        
        <?php
            
            $lista = CategoriaDAO::getCategorias();
            
            if ( $lista->count()==0){
                echo '<h2><b>Nenhuma cidade cadastrada</b></h2>';
            }else {
                
            
        ?>
        
        <table id="tabela" border="1">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <?php 
                foreach ($lista as $categoria) {
                    echo '<tr>
                        <td>'.$categoria->getId().'</td>
                        <td>'.$categoria->getNome().'</td>
                        <td> 
                            <a href="controller/salvarCategoria.php?editar&idCategoria='.$categoria->getId().'">
                            
                            <button class="btn btn-tabela">Editar</button></a>
                        </td>
                        <td>
                            <a href="controller/salvarCategoria.php?excluir&idCategoria='.$categoria->getId().'">
                            
                            <button class="btn btn-tabela">Excluir</button></a>
                            </td>
                          </tr> ';            
                }
            ?>
            
        </table>
        
        <br><br><br>
        <?php
          }
        ?>
        
    </body>
</html>
