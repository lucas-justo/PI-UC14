<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Corben" />
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 

<!-- navegacao-->

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

<!-- botoes -->

<div class="container-fluid d-flex p-2">
	<div class="btn-group-vertical col-2">
		<button class="btn btn-secondary btn-lg">Informacoes</button>
		<button class="btn btn-secondary btn-lg">Sobre Nos</button>
		<button class="btn btn-secondary btn-lg">Entregas</button>
		<button class="btn btn-secondary btn-lg">Privacidade</button>
		<button class="btn btn-secondary btn-lg">Blog</button>
	</div>	
	
<!-- vitrine -->

	<div id="vitrine">	
		<div class="vitrine2">
			<h1 id="iphone">Iphone XS</h1>
			<h2>mais moderno do que nunca</h2>
			<img class="img-fluid" src="gameboy2.png" />
		</div>
		
		<div class="vitrine2">
			<img class="img-fluid sachiko" src="sachiko2.png" />
		</div>	
	</div>

</div>

<!-- produtos -->

<div class="container-fluid display">
 <div class="row produtos">
  <div class="col-sm-3">
	<img class="img-fluid item" src="gapingdragon.png"/>
	<h1  class="textoprodutos" >Gaping Dragon Figure</h1> 
  	<h4>R$328,99</h4>
  </div>
  
  <div class="col-sm-3">
	<img class="img-fluid item" src="chapeu.png"/>
	<h1  class="textoprodutos" >Chapeu Gamer</h1> 
  	<h4>R$328,99</h4>
  </div>
  
 <div class="col-sm-3">
	<img class="img-fluid item" src="solaire.png"/>
	<h1   class="textoprodutos" >Solaire of Astora</h1> 
  	<h4>R$328,99</h4>
  </div>  
</div> 

 <div class="row produtos">
  <div class="col-sm-3">
	<img class="img-fluid item" src="booster.png"/>
	<h1   class="textoprodutos" >Pokemon Breakpoint Booster</h1> 
  	<h4>R$328,99</h4>
  </div>
  
  <div class="col-sm-3">
	<img class="img-fluid item" src="notfound.png"/>
	<h1  class="textoprodutos" >Dragon Dildo</h1> 
  	<h4>R$328,99</h4>
  </div>
  
  <div class="col-sm-3">
	<img class="img-fluid item" src="gameboy.png"/>
	<h1  class="textoprodutos" >Iphone X</h1> 
  	<h4>R$9328,99</h4>
  </div>  
 </div> 
</div>

<div class="container-fluid col-sm-8 promo"> 
	 <div class="texto">
		 <h1 class="foobar">SUPER PROMOÇÕES</h1>
		<a href="www.google.com"> <h4 id="oferta" >Clique aqui e não perca! Só oferta boa Xuxuzinhos!</h4></a>
	 </div> 
	 
	  <img class="sachikopromo" src="sachiko.png" /> 
</div>

<div class="container-fluid col-sm-8 contato"> 
	 <div class="texto2 col-sm-4">
		<a href="www.google.com"> <h1>FALE CONOSCO</h1></a>
	 </div> 
	 
	 <div class="texto2 col-sm-4">
		 <a href="www.google.com"><h1>TERMOS</h1></a>
		 <a href="www.google.com"> <h1>E</h1></a>
		  <a href="www.google.com"> <h1>CONDIÇÕES</h1></a>
	 </div> 	 
</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>!-->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

