<form method = "post">
    <input type="text" name="int1">
    <input type="text" name="int2">
    <input type="text" name="real">
    <input type="submit" name="enviar">
</form>    

<?php

    spl_autoload_register(function($file_name){

        $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

        if(file_exists($filename)){

            require_once($filename);

        }

    });

    $numero = new Numero();

    if(!empty($_POST)){

        $num1 = escapeshellcmd($_POST['int1']);
        $num2 = escapeshellcmd($_POST['int2']);
        $num3 = escapeshellcmd($_POST['real']);

        echo $numero->funcA($num1, $num2)."<br>";
        echo $numero->funcB($num1, $num3)."<br>";
        echo $numero->funcC($num3)."<br>";

    }

?>