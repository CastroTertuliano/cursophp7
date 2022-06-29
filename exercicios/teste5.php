<form method= "post">

<input type="text" name="num">
<input type="submit" name="convet">

</form>

<?php

    spl_autoload_register(function($file_name){

        $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

        if(file_exists($filename)){

            require_once($filename);

        }

    });

    $centi = new Numero();

    if (!empty($_POST)){

        $metro = escapeshellcmd($_POST['num']);
        $centi->setNumero($metro);
        $arm = ($centi->getNumero())*100;
        echo $arm." cm";

    }else{

        echo "digite um valor em metros para calcular os cetímetros";
    }

?>