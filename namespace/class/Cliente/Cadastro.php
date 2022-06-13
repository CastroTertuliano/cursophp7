<?php

    namespace Cliente;

    class Cadastro extends \Cadastro
    {

        public function registraVenda()
        {

            echo "venda registrada para " . $this->getNome();

        }

    }

?>