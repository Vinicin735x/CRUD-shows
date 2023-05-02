<?php
require_once 'init.php';
$PDO = db_connect();
$sql_count = "SELECT COUNT(*) AS total FROM Shows ORDER BY name ASC";
$sql = "SELECT id, name, local, estilo_id, publico_estimado FROM Shows ORDER BY name ASC";
$stmt_count = $PDO->prepare($sql_count);
$stmt_count ->execute();
$total = $stmt_count ->fetchColumn();
$stmt = $PDO ->prepare($sql);
$stmt ->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Estilos</title>

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src ="bootstrap/js/popper.min.js"></script>
        <script src ="bootstrap/js/bootstrap.js"></script>
        <script src ="bootstrap/js/jquery.min.js"></script>
        <script type ="text/javascript">
          $(document).ready(function() {
          $(function(){
          $("#menu").load("navbar.html");
          }) ;
          }) ;
 </script>
    </head>
    <body>
    <div id ="menu"></div >
    <div class="container jumbotron mt-3">
        <div class="container">
            <h1>Listagem das Bandas</h1>
            <h2>Lista de Bandas</h2>
            <p>Total de Bandas: <?php echo $total ?></p>
            <?php if ($total > 0): ?>
            <table class="table table-striped" width="50%" border="1">
                <tbody>
                            <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                               
                            <tr>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['local'] ?></td>
                                <td><?php echo $user['estilo_id'] ?></td>
                                <td><?php echo $user['publico_estimado'] ?></td>
                             
                                <td>
                                    <a class="btn btn-outline-primary" href="form-edit.php?id=<?php echo $user['id'] ?>">Editar</a>
                                    <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza que deseja remover?');">Remover</a>

                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <?php else: ?>
                    <p>Nenhuma banda registrada</p>
                    <?php endif; ?>
                    </div>
                </body>
    </html>