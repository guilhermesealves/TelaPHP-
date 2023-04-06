<?php

$nome = $_POST['nome'];
$tel = $_POST['tel'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];

$arquivo = fopen("clientes.csv","a+");

fwrite($arquivo, $nome . ",");
fwrite($arquivo, $tel . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $email . "\n");

fclose($arquivo);

header("location:clientes.php")


?>






