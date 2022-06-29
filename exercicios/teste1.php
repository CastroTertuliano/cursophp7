<?php

spl_autoload_register(function($class_name){

    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

    if (file_exists(($filename))){

        require_once($filename);
    }

});


$seuCierculo = new Circulo();

if(!empty($_POST)){

    $valor = escapeshellcmd($_POST['numero']);

    $seuCierculo->setRaio($valor);

    echo $seuCierculo->getRaio();

    echo '<hr>';

    $seuCierculo->calculaPerimetro();

    echo $seuCierculo->getPerimetro();

    echo '<hr>';

    $seuCierculo->calculaArea();

    echo $seuCierculo->getArea();

}

else { 

    echo "Você precisa digitar um número válido";

}

?>

<form method = "post">

<input type = "text" name = "numero">
<input type = "submit" name = "calcular">

</form>
