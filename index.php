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

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/popper.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style type="text/css">
        .container{
            margin-top: 50px;
            margin-left: 100px;
        }
    </style>
    </head>
    <body>
             
            

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CEFET-MG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu
          </a>
          <ul class="Menu-menu">
            <li><a class="dropdown-item" href="https://www.tiktok.com/@sons_de_memes/video/7214273151268605190">Shows</a></li>
            <li><a class="dropdown-item" href="#">Estilos</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex ml-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Shows de Varginha</h1>
        <p class="lead">Este é um site para cadastro dos shows que serão realizados em Minas Gerais.</p>
        <img src="./img/ghostbc.png" alt="">
      </div>
      <div>
      <a class="btn btn-lg btn-primary" href="form-add.php" role="button">Cadastre aqui &raquo;</a>
      </div>
    </main>
   
      
      <footer>
       <a href="https://www.instagram.com/terceiroinfo23/" target="_blank">
          <img src="./img/insta 1.png" alt="Instagram" />
        </a>
      </footer>

  </body>
</html>    