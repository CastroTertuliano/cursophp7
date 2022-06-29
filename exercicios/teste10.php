<form method = "post">

    <input type="text" name="altura">
    <input type="submit" name="enviar">

</form>

<?php

       spl_autoload_register(function($file_name){

        $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

        if(file_exists($filename)){

            require_once($filename);

        }

        });
    

    $imc = new Numero();

    if(!empty($_POST)){

        $h = escapeshellcmd($_POST['altura']);

        echo $imc->calculaPI($h);

    }else{

        echo "preciso que informe sua altura";

    }


?>