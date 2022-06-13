<?php

interface Veiculo
{

    public function acelerar($velocidade);
    public function freinar($velocidade);
    public function trocarMarcha($marcha);


}

abstract class Automovel implements Veiculo //uma classe pode implementar várias interfaces
{

    public function acelerar($velocidade)
    {

        echo "o veículo acerou até ". $velocidade ."Km/h";

    }

    public function freinar($velocidade)
    {

        echo "o veículo frenou até ". $velocidade . "Km/h";

    }

    public function trocarMarcha($marcha)
    {

        echo "o veículo engagou a marcha ". $marcha;

    }

}


?>