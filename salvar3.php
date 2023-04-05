<?php

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$cidade = $_POST['cidade'];

$arquivo = fopen("clientes.csv","a+");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $tel . ",");
fwrite($arquivo, $cidade . "\n");

fclose($arquivo);

header("location:clientes.php");




?>