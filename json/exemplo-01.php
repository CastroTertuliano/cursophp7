<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Joao',
    'Idade' => 20

));  //array_push adiciona itens ao array

array_push($pessoas, array(
    'nome' => 'Glauco',
    'Idade' => 25

));

echo json_encode($pessoas); //converte array para JSON

?>