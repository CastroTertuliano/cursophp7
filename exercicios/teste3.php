<form method="post">

  <input type="text" name = "numero">
  <input type="text" name = "numero2">
  <input type="submit" name = "calcular">

</form>

<?php

  spl_autoload_register(function($class_name){

    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

      if(file_exists($filename)){

        require_once($filename);
        
      }

  });

  $somou = new Numero();

    if (! empty($_POST)){

      $num1 = escapeshellcmd($_POST['numero']);

      $num2 = escapeshellcmd($_POST['numero2']);

      echo $somou->somaNumero($num1, $num2);

    }
    else{
      
      echo "Digite os numeros!";

    }


?>