<?php
require_once 'init.php';

$PDO = db_connect();
$sql_count ='SELECT COUNT(*) AS total FROM users ORDER BY name ASC';
$sql = "SELECT id, name, nome do artista e da banda, local_show, estilo, publico estimado FROM users ORDER BY name ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count ->execute();
$total = $stmt_count -> fetchColimn();
$stmt = $PDO -> prepare($sql);
$stmt-> execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de shows assistidos </title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
      <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
          </li>
          <li class="nav-item">PDO
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Desativado</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">PDO
        <h1>Exemplo de navbar</h1>
        <p class="lead">Este exemplo é um simples exercício para ilustrar como navbars estáticas (no topo) funcionam. Assim, você verá que enquanto rola a página a navbar continua em sua posição original e move-se com o resto da página.</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">Veja a documentação &raquo;</a>
      </div>
    </main>

  </body>
    