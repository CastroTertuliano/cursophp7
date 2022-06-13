<?php

$qualASuaIdade = 65;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ( $qualASuaIdade < $idadeCrianca ){

    echo "Você ainda é criaça";

}
else if ($idadeMaior < $qualASuaIdade && $qualASuaIdade < $idadeMelhor){

    echo "Você é um adulto";

}
 else if ($qualASuaIdade >= $idadeMelhor){

    echo "Você está na melhor idade";

 }

 else{

     echo "Você é um adolescente";

 }

 echo "<br>";

 echo ($qualASuaIdade < $idadeMaior)? "Menor de idade" : "Maior de idade"; //esse também funciona BEM LEGAL

?>