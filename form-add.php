<?php
require_once 'init.php';
$PDO = db_connect();
$sql = "SELECT id, descricao_estilo FROM Estilo ORDER BY descricao_estilo ASC";
$stmt = $PDO->prepare($sql);
$stmt->execute();


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Cadastro de Shows Assistidos </title>
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
    </head>
    <body>
    <div id ="menu"></div>
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
        <label for="selectTipo">Selecione o estilo</label>
                <select class ="form-control" name ="estilo_id" id ="estilo_id" required >
                <?php while ( $estilo_id = $stmt -> fetch ( PDO :: FETCH_ASSOC)): ?>
                    <option value =" <?php echo $estilo_id ['id'] ?> "> <?php echo $estilo_id ['descricao_estilo'] ?> </option>
                <?php endwhile; ?>
                </select>
        </div>
        <div class="form-group">
            <label for="publico_estimado"> Publico Estimado: </label>
            <input type="int" class="form-control col-sm" name="publico_estimado" id="publico_estimado" style= "width:25%;" placeholder="Informe o publico estimado">
        </div>
            <button type="submit" class="btn btn-primary"> Cadastrar </button>
        </form>
    </div>
    </body>
</html>       