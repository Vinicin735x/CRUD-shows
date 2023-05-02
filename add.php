<?php

// Arquivo que insere os dados do formulário no banco de dados

require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$local = isset($_POST['local']) ? $_POST['local'] : null;
$estilo_id = isset($_POST['estilo_id']) ? $_POST['estilo_id'] : null;
$publico_estimado = isset($_POST['publico_estimado']) ? $_POST['publico_estimado'] : null;

if (empty($name) || empty($local) || empty($estilo_id) || empty($publico_estimado)) 
{
    echo "Volte e preencha todos os campos";
    exit;
}
$PDO = db_connect();
$sql = "INSERT INTO Shows(name, local, estilo_id, publico_estimado) VALUES(:name, :local, :estilo_id, :publico_estimado)";
$stml = $PDO-> prepare($sql);
$stml ->bindParam(':name', $name);
$stml ->bindParam(':local', $local);
$stml ->bindParam(':estilo_id', $estilo_id);
$stml ->bindParam(':publico_estimado', $publico_estimado);
if ($stml->execute())
{
    header('Location: index.php');
}
else
{
    echo"Erro ao cadastrar";
    print_r($smtl->erroInfo());
}
?>