<?php

$nomes = array('Renata', 'Alan', 'Ingridi', 'Sara', 'Kleber');

$teste = fopen("teste.txt", "a+");

$qtd = count($nomes);

$contador = 0;

while ($contador < $qtd) {

    fwrite($teste, $nomes[$contador] .  "\n");

    $contador++;
}
fclose($teste);







?>