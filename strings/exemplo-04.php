<?php

$frase = "a repetição é a mãe da retenção";

$palavra = "mãe";

$q = strpos ($frase, $palavra); // procura onde está a palavra mãe

$texto = substr ($frase, 0, $q); // procura em $frase atá chegar em dolar $q

var_dump ($texto);

$texto2 = substr ($frase, $q + strlen($palavra), strlen($frase) ); // mostra a frase a partir de $palavra

echo "<br>";

var_dump($texto2);

?>