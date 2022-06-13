<?php

                                // tipos básicos

    $nome = "Heitor"; //strings
    $site = 'www.casgenbiotecnologia.com';

    $ano = 1990;                          //inteiro

    $salario = 5500.99;                   //ponto flutuante

    $bloqueado = false;                   //boleano

    ///////////////////////////////////////////

                               //tipos compostos

    $frutas = array("abacaxi", "laranja", "manga"); //é como se ali tivesse estabelecido 3 possições 0, 1 e 2. Lembra do container? tipo isso.

    //echo $frutas[2]; //mostra o que tem na posição 2 do array; 

    $nascimento = new DateTime(); //classe nativa do php datetime

    //var_dump($nascimento);

    /////////////////////////////////////////////////////////////////////
                                //Tipos espciais

    $arquivo = fopen("exemplo-03.php", "r");
   // var_dump($arquivo);

    $nulo = NULL; //devine a variavel e fala que não tem nada nela



?>