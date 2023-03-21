<?php
require 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$local = isset($_POST['local']) ? $_POST['local'] : null;
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : null;
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($name) || empty($local) || empty($estilo) || empty($id))
{
    echo "Volte e preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "UPDATE  users SET name = :name, local = :local, estilo = :estilo WHERE id = :id";
$stmt = $PDO-> prepare($sql);
$stmt -> bindParam(':name', $name);
$stmt -> bindParam(':local', $local);
$stmt -> bindParam(':estilo', $estilo);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT)
$stmt -> execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($smt->execute())
{
   header('location:index.php');
}
else
{
    echo "Erro ao alterar"
    print_r($stmt->erroinfo());
}
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
    