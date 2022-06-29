<?php
 echo "Horas trabalhadas--------------------Valor da hora";
?>

<form method ="post">

<input type = "text" name = "hora">
<input type = "text" name = "valor">
<input type = "submit" name = "enviar">

</form>

<?php

    spl_autoload_register(function($file_name){

        $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

        if(file_exists($filename)){

            require_once($filename);

        }

    });

    $joao = new Trabalhador();

    if (!empty($_POST)){

        $h = escapeshellcmd($_POST['hora']);
        $v = escapeshellcmd($_POST['valor']);

        $joao->setHoras($h);
        $joao->setValor($v);

        $rend = $joao->calculaSalario();

        echo "Seu salário é de: ".$rend." R$";


    }else{

        echo "digite o valor da hora e a quantidade de horas trabalhadas";

    }

?>