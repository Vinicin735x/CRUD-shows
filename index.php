<?php

// Exibe a lista de todos os shows cadastrados

require_once 'init.php';


$PDO = db_connect();
$sql_count ='SELECT COUNT(*) AS total FROM Shows ORDER BY name ASC';
$sql = "SELECT id, name, local, estilo, publico_estimado FROM Shows ORDER BY name ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count ->execute();
$total = $stmt_count -> fetchColumn();
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
      <a class="navbar-brand" href="#">CEFET-MG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </nav>

    <main role="main" class="container">
      <div class="jumbotron">
        <h1>Shows de Varginha</h1>
        <p class="lead">Este é um site para cadastro dos shows que serão realizados na cidade de Varginha-Mg.</p>
        <a class="btn btn-lg btn-primary" href="form-add.php" role="button">Cadastre aqui &raquo;</a>
      </div>
    </main>

    <div class="container">
        <h2>Lista de bandas</h2>
        <p> Total de bandas: <?php echo $total ?></p>
        <?php if ($total > 0): ?>
        <table classs="table table.striped" width="50%" border="1">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Local</th>
              <th>Estilo</th>
              <th>Publico estimado</th>
            </tr>    
          </thead>  
          <tbody>
            <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['local'] ?></td>
                <td><?php echo $user['estilo'] ?></td>
                <td><?php echo $user['publico_estimado'] ?></td>
                <td>
                  <a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                  <a href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza que deseja remover?');">Remover</a>
                </td>  
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        <?php else: ?>
        <p> Nenhum usuário registrado </p>
        <?php endif; ?>
      </div>

  </body>
</html>    