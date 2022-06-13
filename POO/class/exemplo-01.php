<?php

class Pessoa{

    public $nome; //atributo

    public function fala(){ //metodo

        return "meu nome é ".$this->nome; //dentro do método uso $this para chamar o atributo

    }

}

$glaucio = new Pessoa();
$glaucio->nome = "glaucio daniel";
echo $glaucio->fala();


?>