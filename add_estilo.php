<?php
require_once 'init.php';

$descricao_estilo = isset($_POST['descricao_estilo']) ? $_POST['descricao_estilo'] : null;



if (empty($descricao_estilo))
{
    echo "Preencha todos os campos";
    exit;
}

$PDO = db_connect();
$sql = "INSERT INTO Estilo(descricao_estilo) VALUES(:descricao_estilo)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':descricao_estilo', $descricao_estilo);
if ($stmt -> execute())
{
    header('Location: index.php');

}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>