<?php

class Pessoa{

    public $nome = "Heitor Generoso";
    protected $idade = "1";
    private $senha = "12345";

    public function verDados(){

        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";

    }


}

$obj = new Pessoa();

$obj -> verDados();

?>