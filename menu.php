<?php
  if(session_status() != PHP_SESSION_ACTIVE ){
      session_start();
   }
?>
<header style="margin-top: -24px;">  

  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"> </span>
    </button>

      <?php
         if( isset($_SESSION['logado']) && 
                   $_SESSION['logado'] == TRUE ) {
      ?>

     <a class="loginmenu" href="index.php"><h2>Inicio</h2> </a>
     <?php
           echo '<h4> Olá, '.$_SESSION['nome'].'</h4>';
           echo '<a href="sair.php"><button>Sair</button></a>';
          }else{
     ?>

  	<a class="loginmenu" href="index.php"><h2>Inicio</h2> </a>
    
    <div class="dropdown">
      <button class="btn dropdown-toggle btn-login" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Fazer Login
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <input class="form-control mr-sm-2 dropdown-item" href="#" type="search" placeholder="Usuario.." aria-label="Search">
        <input class="form-control mr-sm-2 dropdown-item" href="#" type="search" placeholder="Senha.." aria-label="Search">
        <button id="btndropdown" class="btn btn-outline-success my-2 my-sm-0 dropdown-item" type="submit">Login</button>
      <a class="loginmenu" href="frmCliente.php">Cadastro</a>
      </div>
  </div>
      <?php
         }
      ?>

      <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
      <ul class="navbar-nav ml-auto mx-auto">
       
        <li class="nav-item dropdown col-6">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Computadores
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Desktops</a>
            <a class="dropdown-item" href="#">Notebooks</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Tablets</a>
          </div>
        </li>   
      
      <li class="nav-item  col-4"><a  class="nav-link" href="#">Smartphones</a></li>
      <li class="nav-item  col-4"><a  class="nav-link" href="#">Audio</a></li>
      <li class="nav-item  col-4"><a  class="nav-link" href="#">TVs</a></li>        
      </ul>
   <!-- </div> -->
    <form class="form-inline my-2 my-lg-0">
        <input style="width: 160px;" class="form-control mr-sm-2" type="search" placeholder="Nome do Produto.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 btn-pesquisa" type="submit">Pesquisar</button>
    </form>

</nav>
    
</header>

