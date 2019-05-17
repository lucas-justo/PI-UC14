<?php
    include_once 'model/clsCidade.php';
	include_once 'model/clsEstado.php';
	include_once 'model/clsPais.php';
    include_once 'model/clsCliente.php';
    include_once 'dao/clsCidadeDAO.php';
    include_once 'dao/clsClienteDAO.php';
    include_once 'dao/clsConexao.php';
    
    session_start();
    
    $nome = "";
    $telefone = "";
    $email = "";
    $cpf = "";
    $sexo = "";
    $admin = 0;
    $idCidade = 0;
    $foto = "sem_foto.png";
    $action = "inserir";
    
    if( isset($_REQUEST['editar']) ){
        $id = $_REQUEST['idCliente'];
        $cliente = ClienteDAO::getClienteById($id);
        $nome = $cliente->getNome();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        $cpf = $cliente->getCpf();
        $sexo = $cliente->getSexo();
        $admin = $cliente->getAdmin();
        $foto = $cliente->getFoto();
        $idCidade = $cliente->getCidade()->getId();
        $action = "editar&idCliente=".$cliente->getId();
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
         <title>Cadastro de Cliente</title>
</head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Cliente</h1>     
        
        <form action="controller/salvarCliente.php?<?php echo $action; ?>" method="POST" 
              enctype="multipart/form-data">
            
            <?php
                if( isset( $_SESSION['admin'] ) && $_SESSION['admin'] ){
                    
                    if( $admin ){
                        echo '<input type="checkbox" selected name="cbAdmin" value="1"/>';
                    } else {
                        echo '<input type="checkbox" name="cbAdmin" value="0" />';
                    }
                    echo ' <label>Admin</label> <br><br>';
                }
            ?>
            
		
			
            <label>Nome: </label>
            <input type="text" name="txtNome" value="<?php echo $nome; ?>" required maxlength="50" /> <br><br>
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" value="<?php echo $telefone; ?>" maxlength="20" /> <br><br>
            <label>E-mail: </label>
            <input type="email" name="txtEmail" value="<?php echo $email; ?>" required /> <br><br>
            
            <label>CPF: </label>
            <input type="text" name="txtCPF" value="<?php echo $cpf; ?>" required /> <br><br>
			
			<label>Pais: </label>
            <select name="pais" >
                <option value="0"  >Selecione...</option>
                <?php
                    $lista = CidadeDAO::getPais();
                    
                    foreach ($lista as $pais){
                        $selecionar = "";
                        if( $idPais == $pais->getId() ){
                            $selecionar = " selected ";
                        }
                        
                        echo '<option '.$selecionar.' value="'.$pais->getId().'" >'.
                                $pais->getNome().'</option>';
                    }
                ?>
			</select>
            
			<label>Estado: </label>
            <select name="estado" >
                <option value="0"  >Selecione...</option>
                <?php
                    $lista = CidadeDAO::getEstados();
                    
                    foreach ($lista as $estado){
                        $selecionar = "";
                        if( $idEstado == $estado->getId() ){
                            $selecionar = " selected ";
                        }
                        
                        echo '<option '.$selecionar.' value="'.$estado->getId().'" >'.
                                $estado->getNome().'</option>';
                    }
                ?>
			</select>
			
			
            <label>Cidade: </label>
            <select name="cidade" >
                <option value="0"  >Selecione...</option>
                <?php
                    $lista = CidadeDAO::getCidades();
                    
                    foreach ($lista as $cid){
                        $selecionar = "";
                        if( $idCidade == $cid->getId() ){
                            $selecionar = " selected ";
                        }
                        
                        echo '<option '.$selecionar.' value="'.$cid->getId().'" >'.
                                $cid->getNome().'</option>';
                    }
                ?>
                
            </select>
            
            <?php 
                $feminino = "";
                $masculino = "";
                if( $sexo == "f"){
                    $feminino = " checked ";
                }
                if( $sexo == "m"){
                    $masculino = " checked ";
                }
            ?>
            <div>
            <label>Sexo: </label>
            <input type="radio" name="rbSexo" <?php echo $feminino; ?> value="f" required /> Feminino 
            <input type="radio" name="rbSexo" <?php echo $masculino; ?> value="m" /> Masculino <br><br>
            </div>
            <?php 
                if( isset($_REQUEST['editar'])){
                    echo '<img src="fotos_clientes/'.$foto.'" width="30px" />';
                }
            ?>
            
            <input type="file" name="foto" /> <br><br>
            <?php
                if( !isset( $_REQUEST['editar'] )){
            ?>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" required maxlength="100"  /> <br><br>
                    <label>Confirme sua Senha: </label>
                    <input type="password" name="txtSenhaConfirma" required maxlength="100" /> <br>
                    <br><br>
            <?php 
                }
            ?>
            <input class="btn" type="submit" name="Salvar" value="Salvar" />
            <input class="btn" type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>
