<?php

// Arquivo que exclui shows cadastrados

require_once 'init.php';
$show = isset($_GET['id']) ? $_GET['id'] : null;

if(empty($show))
{
    echo "Show não informado";
    exit;
}

$PDO = db_connect();
$sql = "DELETE FROM Shows WHERE id = :id";
$stmt = $PDO-> prepare($sql);
$stmt ->bindParam(':id', $show, PDO::PARAM_INT);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao remover";
    print_r($stmt->erroinfo());
}
?>