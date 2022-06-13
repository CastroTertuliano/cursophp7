<?php

$nome = "Heitor Castro";

$nome = strtoupper($nome); //strtoupper() é uma função que deixa o texto maiúsculo

echo $nome;

$nome = strtolower($nome); //strtolower () deixa tudo minúsculo

echo "<br>";

echo $nome;

echo "<br>";

echo ucwords($nome); // deixa a primeira letra de cada palavra maiúscula

echo "<br>";

echo ucfirst($nome); //deixa a primeira letra do texto maiúscula

?>