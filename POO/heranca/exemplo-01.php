<?php

class Documento
{

private $numero;

public function getNumero()
    {

        return $this->numero;

    }

public function setNumero($n)
    {

        $this->numero = $n;

    }

}

class CPF extends Documento 
{

public function validar():bool
    {
        $numeroCPF = $this->getNumero();
        //validação do cpf

        return true;

    }

}

$doc = New CPF;
$doc->setNumero("10119188627");
var_dump ($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>