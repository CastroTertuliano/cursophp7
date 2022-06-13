<?php

class Numero{

   private $metro = 8;
   


   public function mostraNumero(){

    echo $this->metro*100;
    

   }

}

$numero = new Numero();

echo $numero->mostraNumero();


?>