<form method = "post">

    <input type="text" name = "nota1">
    <input type="text" name = "nota2">
    <input type="text" name = "nota3">
    <input type="submit" name = "calcular">

</form>

<?php

spl_autoload_register(function($file_name){

    $filename = "class".DIRECTORY_SEPARATOR.$file_name.".php";

    if(file_exists($filename)){

        require_once($filename);

    }

});

$media = new Numero();

if(!empty ($_POST)){

    $media1 = escapeshellcmd($_POST['nota1']);
    $media2 = escapeshellcmd($_POST['nota2']);
    $media3 = escapeshellcmd($_POST['nota3']);

    echo "Sua média é: ".$media-> media($media1, $media2, $media3);

}else{

    echo "digite as suas notas corretamente";

}

?>