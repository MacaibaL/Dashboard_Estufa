<?php

include '../conexao.php';

$sql = "SELECT Poten1 
        FROM dados
        ORDER BY id DESC limit 1";
$stmt = $PDO->prepare($sql);
$stmt->execute();

$linha = $stmt->fetchAll(PDO::FETCH_OBJ);

//Trasforma os dados em JSON
$jsonTable = json_encode($linha);

echo $jsonTable;