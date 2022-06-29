<?php

spl_autoload_register(function($class_name){

   $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

   if(file_exists(($filename))){

      require_once($filename);

   }

});

$meuNumero = new Numero();

if(! empty($_POST)){ 

   $valor = escapeshellcmd($_POST['numero']);

   $meuNumero->setNumero($valor);

   echo $meuNumero->getNumero();

}

else{

   echo "Digite um número!";

}


?>

<form method = "post">
   
   <input type = "text" name = "numero">
   <input type="submit" name = "enviar">

</form>