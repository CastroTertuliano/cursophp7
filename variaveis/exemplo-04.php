<?php
                        //Variáveis pré definidas ou rede super globais
    
    $nome = $_GET["a"];
    
    //se para inteiro: $nome = (int) $_GET["a"];

    //var_dump($nome);      //mostra o tipo e o conteúdo na tela       
    
    //$ip = $_SERVER["REMOTE_ADDR"]; //pega informações do ambiente, nesse caso o IP 

    $ip = $_SERVER["SCRIPT_NAME"]; // pega informações de acesso...

    echo $ip;

?>