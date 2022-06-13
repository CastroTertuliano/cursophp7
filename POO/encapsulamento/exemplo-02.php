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

class Programador extends Pessoa{

    public function verDados(){

        echo get_class($this)."<br/>"; //mostra de qual classe vem esse método

        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";

    }

}

$obj = new Programador();

$obj -> verDados();

?>