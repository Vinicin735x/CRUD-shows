<?php
require_once 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$local = isset($_POST['local']) ? $_POST['local'] : null;
$estilo = isset($_POST['estilo']) ? $_POST['estilo'] : null;

if (empty($name) || empty($local) || empty($estilo)) 
{
    echo "Volte e preencha todos os campos";
    exit;
}
$PDO = db_conect();
$sql = "INSERT INTO users(name, local, estilo) VALUES(:name, :local, :estilo)";
$stml = $PDO-> prepare($sql);
$stml ->bindParam(':name', $name);
$stml ->bindParam(':local', $local);
$stml ->bindParam(':estilo', $estilo);
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