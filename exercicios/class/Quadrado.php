<?php

class Quadrado{

    private $lado;
    private $area;
    private $perimetro;

    public function setLado($valor){

        $this->lado = $valor;

    }
    public function getLado(){

        return $this->lado;

    }
    public function setArea($valor){

        $this->area = $valor;

    }
    public function getArea(){

        return $this->area;
        
    }
    public function setPerimetro($valor){

        $this->perimetro = $valor;

    }
    public function getPerimetro(){

        return $this->perimetro;
        
    }
    public function calculaArea($valor){

        return $valor*$valor;
        
    }



}

?>