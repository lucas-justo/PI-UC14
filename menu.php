<?php
    if(session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
?>
<header>
    <?php
        if( isset($_SESSION['logado']) && 
                  $_SESSION['logado'] == TRUE ) {
    ?>
	<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Nome do Produto.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
   <?php
          echo 'Olá, '.$_SESSION['nome'];
          echo '<a href="sair.php"><button>Sair</button></a>';
        }else{
   ?>
    <?php
        }
    ?>
    
</header>

<hr>

