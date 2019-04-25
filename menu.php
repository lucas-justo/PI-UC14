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
		   echo '<div class="logado">'; 
           echo '<h4> Olá, '.$_SESSION['nome'].'</h4>';
		   echo '<a class="nav-item" href="sair.php">Painel</a>';
           echo '<a class="nav-item" href="sair.php">Sair</a>';
		   echo '</div>';
          }else{
     ?>

                    <a class="loginmenu" href="index.php"><h2>Inicio</h2> </a>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle btn-login" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fazer Login
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form action="entrar.php" method="POST">
                                <input class="form-control mr-sm-2 dropdown-item" href="#" type="text" name="txtLogin" placeholder="Email/CPF.." required autocomplete="off" />
                                <input class="form-control mr-sm-2 dropdown-item" href="#" type="password" name="txtSenha" placeholder="Senha.." required autocomplete="off" />
                                <input id="btndropdown" class="btn btn-outline-success my-2 my-sm-0 dropdown-item" type="submit" value="Entrar" />
                            </form>
                            <a class="loginmenu" href="frmCliente.php">Cadastro</a>
                        </div>
                    </div>
                    <?php
         }
      ?>

                        <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                        <ul class="navbar-nav ml-auto mx-auto">

                            <li class="nav-item  col-4"><a class="nav-link" href="produtosPC.php"> Computadores </a> </li>
                            <li class="nav-item  col-4"><a class="nav-link" href="produtosPhone.php">Smartphones</a></li>
                            <li class="nav-item  col-4"><a class="nav-link" href="produtosTV.php">TVs</a></li>
                            <li class="nav-item  col-4"><a class="nav-link" href="produtos.php">Todos Produtos</a></li>
                        </ul>
                        <!-- </div> -->
                        <form action="pesquisa.php" method="POST" class="form-inline my-2 my-lg-0">
                            <input style="width: 160px;" class="form-control mr-sm-2" type="search" name="txtPesquisa" placeholder="Nome do Produto.." aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0 btn-pesquisa" type="submit">Pesquisar</button>
                        </form>

        </nav>

    </header>