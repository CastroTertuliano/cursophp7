<?php

class Numero{

    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($valor){

        $this->numero = $valor;

    }

    public function somaNumero($num1, $num2){
        
        return $num1 + $num2;

    }

    public function media($num1, $num2, $num3){

        return (($num1 + $num2 + $num3)/3);

    }

    public function transformaFparaC($num){

        $cels = ($num - 32)/1.8;

        return $cels;

    }

    public function funcA($num1, $num2){

        $res = ($num1*$num2)/2;

        return $res;

    }

    public function funcB($num1, $num3){

        $res = ($num1*3 + $num3);

        return $res;

    }

    public function funcC($num3){

        $res = $num3**3;
        
        return $res;

    }

    public function calculaPI($num){

        return ((72.7*$num)-58);

    }

        


}
?>