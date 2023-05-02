<?php

// Arquivo que atualiza os dados dos shows na tabela shows do bando de dados

require 'init.php';
$name = isset($_POST['name']) ? $_POST['name'] : null;
$local = isset($_POST['local']) ? $_POST['local'] : null;
$estilo = isset($_POST['estilo_id']) ? $_POST['estilo_id'] : null;
$publico_estimado = isset($_POST['publico_estimado']) ? $_POST['publico_estimado'] : null;
$id = isset($_POST['id']) ? (int) $_POST['id'] : null;



if (empty($name) || empty($local) || empty($estilo) || empty($publico_estimado) || empty($id))
{
    echo "Volte e preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "UPDATE  Shows SET name = :name, local = :local, estilo_id = :estilo, publico_estimado = :publico_estimado WHERE id = :id";
$stmt = $PDO-> prepare($sql);
$stmt -> bindParam(':name', $name);
$stmt -> bindParam(':local', $local);
$stmt -> bindParam(':estilo', $estilo);
$stmt -> bindParam(':publico_estimado', $publico_estimado);
$stmt -> bindParam(':id', $id, PDO::PARAM_INT);
$stmt -> execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($stmt->execute())
{
   header('location:index.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->erroinfo());
}

?>      
