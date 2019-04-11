<?php
	include_once 'model/clsCategoria.php';
    include_once 'dao/clsCategoriaDAO.php';
    include_once 'dao/clsConexao.php';
	
	session_start();
	
	$nome = "";
	$action = "inserir";
	
	if( isset($_REQUEST['editar'])){
		$id = $_REQUEST['idProduto'];
		$nome = $produto->getNome();
		$action = "editar&idCategoria".$categoria->getId();		
	}
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
		
		<h1 align="center">Cadastrar Categoria</h1>
		
		<form action="controller/salvarCategoria.php?<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
		
		<label>Nome: </label>
		<input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlenght="100" />
		<input type="submit" value="Salvar" />
		<input type="reset" value="Limpar" />
		
		</form>
		
	</body>
</html>