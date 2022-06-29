<form method = "post">

<input type="text" name="lado">
<input type="submit" name="calcular">

</form>

<?php

spl_autoload_register(function($file_name){

    $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

    if(file_exists($filename)){

        require_once($filename);

    }

});

$quad = new Quadrado();

if(!empty($_POST)){

    $rec = escapeshellcmd($_POST['lado']);

    $valor = $quad->calculaArea($rec);

    echo "A área é: ".($valor*2);


}else{

    echo "digite o comprimento do lado do quadrado!";
}

?>