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

            <div class="blog textPadding center">
                <h1>Fale com os Dolphin Membros!!</h1>
                <br>
                <form id="formContato" name="formContato" class="row">
                    <input class="form-control color" type="text" name="vSCONNOME" id="vSCONNOME" placeholder="Nome" required>
                    <input class="form-control color" type="email" name="vSCONEMAIL" id="vSCONEMAIL" placeholder="Email" required>
                    <input class="form-control color" type="tel" name="vSCONTELEFONE" id="vSCONTELEFONE" placeholder="Telefone" required>
                    <input class="form-control color" type="text" name="vSCONENDERECO" id="vSCONENDERECO" placeholder="Endereço" required>
                    <textarea class="form-control color" rows="5" name="vSCONMENSAGEM" id="vSCONMENSAGEM" placeholder="Mensagem" required></textarea>
                    <button id="submit" type="submit" class="form-control color" name="submit">Enviar Mensagem</button>
                </form>
            </div>
        </div>

</body>
<?php include("footer.php") ?>

</html>