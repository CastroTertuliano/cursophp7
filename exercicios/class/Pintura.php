<?php

class Pintura
{

    private $areaP;   

    public function getAreaP()
    {

        return $this->areaP;

    }

    public function setAreaP($value)
    {

        $this->areaP = $value;

    }

    public function latas()
    {

         $r1= $this->getAreaP();

         $r2 =$this->getAreaP();

        return "<br> Você precisará de ".number_format(($r1/54), 2)." latas de tintas <br> Valor total de R$ ".number_format((80*$r2/54), 2);

    }


}

?>