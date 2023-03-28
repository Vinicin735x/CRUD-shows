<?php

// Arquivo que define a função do DB_connect usado para conectar ao banco de dados

function db_connect()
{
    $PDO = new PDO('mysql:host='  .DB_HOST.';dbname=' .DB_NAME. ';charset=utf8', DB_USER, DB_PASS);

    return $PDO;
}

?>