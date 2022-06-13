<?php

//include "inc/exemplo-01.php"; // chama o arquivo exemplo-01 dentro da pasta inc

require "inc/exemplo-01.php";

    //include tenta funcionar msm se o arq. não existir 
    //require não funciona se o arquivo não existir

$resultado = soma(10, 20);

//include_once                      //traz o arq. somente uma fez.
//require_once

echo $resultado;

?>