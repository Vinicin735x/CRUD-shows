<?php
require_once 'init.php';
$PDO = db_connect() ;
$sql = " SELECT id , descricao_estilo FROM Estilo ORDER BY descricao_estilo ASC";
$stmt = $PDO -> prepare( $sql );
$stmt -> execute ();
// Exibe a lista de todos os shows cadastrados

require_once 'init.php';


$PDO = db_connect();
$sql_count ='SELECT COUNT(*) AS total FROM Shows ORDER BY name ASC';
$sql = "SELECT id, name, local, estilo_id, publico_estimado FROM Shows ORDER BY name ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count ->execute();
$total = $stmt_count -> fetchColumn();
$stmt = $PDO -> prepare($sql);
$stmt-> execute();
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="./css/style.css"/>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de shows assistidos </title>
   
        <meta charset="utf-8">
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <script src ="bootstrap/js/popper.min.js"></script>
        <script src ="bootstrap/js/bootstrap.js"></script>
        <script src ="bootstrap/js/jquery.min.js"></script>
        <script type ="text/javascript">
          $(document).ready(function() {
          $(function(){
          $("#menu").load("navbar.html");
          });
          });
        </script>
        <style type="text/css">
            .container{
                margin-top: 100px;
                margin-left: 250px;
            }
        </style>
        </head>
        <body>
        <div id ="menu"></div>
            <div class="container  jumbotron mt-50  ">
                <p class="h1 text-center">Sistema de Cadastro de Banda</p>  
                <picture>
                    <img src="./img/image 4.png" alt="guitarra" />
                </picture>
            </div>
                <footer>

                    <div>

                        <a href="https://www.instagram.com/terceiroinfo23/" target="_blank">
                        <img src="./img/insta 1.png" alt="Instagram" />
                        </a>
    
                    </div>

                </footer>
        </body>
        </html>