<?php

$nome = "Heitor";

echo $nome; //mostra $nome na tela

//var_dump($nome); //mostra o tipo, espaço alocado e o que tem la

$sobrenome = " Castro";

//como concatenar duas variáveis

$nomeCompleto = $nome . $sobrenome; // O . faz concatenação
echo $sobrenome;

exit; //para a execussão aqui

unset($nome); //como apagar variável, deixa ela indefinida

if (isset ($nome))
{ //se ela existir mostre na tela
echo $nome;
}


?>

