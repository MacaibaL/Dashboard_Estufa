<?php

include 'conexao.php';

$sql = "SELECT * FROM dados";
$stmt = $PDO->prepare($sql);
$stmt->execute();

$linha = $stmt->fetchAll(PDO::FETCH_OBJ);

//Trasforma os dados em JSON
$jsonTable = json_encode($linha);

echo $jsonTable;