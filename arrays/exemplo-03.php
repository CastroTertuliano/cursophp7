<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'Idade' => 20

));  //array_push adiciona itens ao array

array_push($pessoas, array(
    'nome' => 'Glauco',
    'Idade' => 25

));

print_r($pessoas);

// tbm poderia chamar especificando a posição

print_r($pessoas[0]['nome']);

?>