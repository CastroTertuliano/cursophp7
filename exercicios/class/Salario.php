<?php

class Salario
{

    private $horastrab;
    private $horah;
    private $salario;

    public function getHorastrab()
    {

        return $this->horastrab;

    }

    public function setHorastrab($value)
    {

        $this->horastrab = $value;

    }

    public function getHorah()
    {

        return $this->horah;
        
    }

    public function setHorah($value)
    {

        $this->horah = $value;

    }

    public function getSalario()
    {

        $result = ($this->getHorah())*($this->getHorastrab());

        return $result;

    }

    public function ir()
    {

        $ir = $this->getSalario();
        echo "Você pagou R$ ".$ir*0.11." de IR";

    }

    public function inss()
    {

        echo "Você pagou R$ ".($this->getSalario()*0.08)." de INSS";

    }

    public function sind()
    {
        
        echo "Você pagou R$ ".($this->getSalario()*0.05)." de sindicato";

    }

    public function salarioLiqd()
    {

        echo "O salário liquido é de R$ ".($this->getSalario()-$this->sind()-$this->inss()-$this->ir());

    }

}

?>