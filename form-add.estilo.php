<?php
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Estilo</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript">
                    $(document).ready(function(){
                        $(function(){
                            $("#menu").load("navbar.html");
                         });
                    });
                    </script>
    </head>
    <body>
    <div class="container">
                <div id="menu"></div>
            </div>
    <div class="container">
        <h1>Sistema de cadastro de banda</h1>
        <h2>Cadastro de estilos</h2>

        <form action="add_estilo.php" method="post">
        <div class="form-group">
            <label for="name">Estilo: </label>
            <input type="text"  class="form-control col-sm" name="descricao_estilo" id="name" style="widht:25%;" placeholder="Informe o estilo ">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </body>
</html>
            