<?php

// Arquivo que insere os dados do formulário no banco de dados

require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$local = isset($_POST['local']) ? $_POST['local'] : null;
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : null;
$publico_estimado = isset($_POST['publico_estimado']) ? $_POST['publico_estimado'] : null;

if (empty($name) || empty($local) || empty($estilo) || empty($publico_estimado)) 
{
    echo "Volte e preencha todos os campos";
    exit;
}
$PDO = db_connect();
$sql = "INSERT INTO Estilos(estilo) VALUES(:estilo)";
$stml = $PDO-> prepare($sql);
$stml ->bindParam(':name', $name);
$stml ->bindParam(':local', $local);
$stml ->bindParam(':estilo', $estilo);
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