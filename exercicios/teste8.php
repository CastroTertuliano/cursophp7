<form method = "post">

<input type="text" name="numero">
<input type="submit" name="enviar">

</form>

<?php

spl_autoload_register(function($file_name){

    $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";
    
    if(file_exists($filename)){

        require_once($filename);

    }

});

$temp = new Numero();

if(!empty ($_POST)){

    $cels = escapeshellcmd($_POST['numero']);
    
    $res = $temp->transformaFparaC($cels);

    echo $res." ºC";

}else{

    echo " Digite a temperatura em ºF";

}

?>