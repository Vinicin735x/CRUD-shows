<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Shows Assistidos </title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="container">
        <h1> Sistema de Cadastro </h1>
        <h2> Cadastro de Shows Assistidos </h2>

        <form action="add.php" method="post">
        <div class="form-group">
            <label for="name"> Nome: </label>
            <input type="text" class="form-control col-sm" name="name" id="name" style= "width:25%;" placeholder="Informe o nome da Banda/Artista">
        </div>
        <div class="form-group">
            <label for="local"> Local: </label>
            <input type="text" class="form-control col-sm" name="local" id="local" style= "width:25%;" placeholder="Informe o local do show">
        </div>
        <div class="form-group">
            <label for="estilo"> Estilo: </label>
            <input type="text" class="form-control col-sm" name="estilo" id="estilo" style= "width:25%;" placeholder="Informe o estilo musical">
        </div>
            <button type="submit" class="btn btn-primary"> Cadastrar </button>
        </form>
    </div>
    </body>
</html>       