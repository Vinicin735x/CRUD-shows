<?php
require 'init.php';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

if (empty($id))
{
    echo "ID para alteração não definido";
    exit;
}

$PDO = db_connect();
$sql = "SELECT name, local, estilo FROM users WHERE id =:id";
$stmt = $PDO-> prepare($sql);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!is_array($user))
{
    echo "Nenhum usuário encontrado";
    exit;
}
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

        <form action="edit.php" method="post">
        <div class="form-group">
            <label for="name"> Nome: </label>
            <input type="text" class="form-control col-sm" name="name" id="name" style= "width:25%;"
                    value="<?php echo $user['name'] ?>">
        </div>
        <div class="form-group">
            <label for="estilo"> Estilo: </label>
            <input type="text" class="form-control col-sm" name="estilo" id="estilo" style= "width:25%;"
                    value="<?php echo $user['estilo'] ?>">
        </div>
        <div class="form-group">
            <label for="local"> Local: </label>
            <input type="text" class="form-control col-sm" name="local" id="local" style= "width:25%;"
                    value="<?php echo $user['local'] ?>">
        </div>
            <input type="hidden" name="id" value="<?php echo $id ?> ">
            <button type="submit" class="btn btn-primary">Alterar</button>
            
        </form>
    </div>
    </body>
</html>       