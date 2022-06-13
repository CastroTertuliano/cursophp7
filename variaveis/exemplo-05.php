<?php

                            //Escopo de variáveis

    $nome = "Heitor";
    
    function teste(){

        global $nome;

        echo $nome;
    }

    function teste2(){

        $nome = " - Tertu";
      
        echo $nome. " agora no teste 2";
    }

    teste();
    teste2();

?>