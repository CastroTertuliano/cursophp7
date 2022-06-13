<?php

class Circulo{

    protected $raio = 5;

    public function calculaPerimetro(){

        $perimetro=2*M_PI*$this->raio;

        return $perimetro;

    }

    public function calculaArea(){

        $area=M_PI*$this->raio*$this->raio;
        
        return $area;

    }

    
}

$seuCierculo = new Circulo();
echo $seuCierculo->calculaPerimetro()."<br/>";
echo $seuCierculo->calculaArea();



?>