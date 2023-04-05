<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$phone = $_POST['phone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sexo = $_POST['sexo'];


echo "$nome - $cidade - $estado - $phone";

$arquivo = fopen("clientes.txt", "a+");

fwrite($arquivo, $nome ."\t");
fwrite($arquivo, $cidade ."\t");
fwrite($arquivo, $estado ."\t");
fwrite($arquivo, $phone ."\t");
fwrite($arquivo, $cpf ."\t");
fwrite($arquivo, $rg ."\t");
fwrite($arquivo, $sexo ."\n");




fclose($arquivo);

header("location:index.php");

?>