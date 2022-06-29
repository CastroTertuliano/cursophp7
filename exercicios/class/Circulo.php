<?php

class Circulo{

    private $raio;
    private $perimetro;
    private $area;

    public function getRaio(){

        return $this->raio;

    }

    public function setRaio($valor){

        $this->raio = $valor;

    }

    public function getPerimetro(){

        return $this->perimetro;

    }

    public function setPerimetro($valor){

        $this->perimetro = $valor;

    }
    public function getArea(){

        return $this->area;

    }

    public function setArea($valor){

        $this->area = $valor;

    }


    public function calculaPerimetro(){

        $cal = 2*M_PI*$this->getRaio();

        $this->setPerimetro($cal);
        
    }

    public function calculaArea(){

        $val=M_PI*$this->getRaio()*$this->getRaio();
        
        $this->setArea($val);

    }

    
}

?>