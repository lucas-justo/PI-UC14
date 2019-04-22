<!DOCTYPE html>
<html class="teste">

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

        <div class="container-fluid d-flex p-2 blog-container">

            <div class="">
                <form id="formContato" name="formContato" class="row">
                    <input class="form-control" type="text" name="vSCONNOME" id="vSCONNOME" placeholder="Nome" required>
                    <input class="form-control" type="email" name="vSCONEMAIL" id="vSCONEMAIL" placeholder="Email" required>
                    <input class="form-control" type="tel" name="vSCONTELEFONE" id="vSCONTELEFONE" placeholder="Telefone" required>
                    <input class="form-control" type="text" name="vSCONENDERECO" id="vSCONENDERECO" placeholder="Endereço" required>
                    <textarea class="form-control" rows="5" name="vSCONMENSAGEM" id="vSCONMENSAGEM" placeholder="Mensagem" required></textarea>
                    <button id="submit" type="submit" class="form-control" name="submit">Enviar Mensagem</button>
                </form>
            </div>
        </div>

        <div class="container-fluid correcao-promo promo">
            <div class="texto">
                <h1 class="foobar">SUPER PROMOÇÕES</h1>
                <a href="www.google.com">
                    <h4 id="oferta">Clique aqui e não perca! Só oferta boa Xuxuzinhos!</h4></a>
            </div>
            <img class="sachikopromo" src="sachiko.png" />
        </div>

</body>
<?php include("footer.php") ?>

</html>