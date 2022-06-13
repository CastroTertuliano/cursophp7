<?php

    require_once ("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Heitor Castro");
    
    $cad->setemail("heitorcastro@gmail.com");
    
    $cad->setSenha("123456");

    $cad->registraVenda();

?>