<?php

    class Trabalhador{

        private $valor;
        private $horas;

        public function getValor(){

            return $this->valor;

        }
        public function setValor($value){

            $this->valor = $value;

        }
        public function getHoras(){

            return $this->horas;

        }
        public function setHoras($value){

            $this->horas = $value;
            
        }
        public function calculaSalario(){

            $salario = ($this->getHoras())*($this->getValor());
        
            return $salario;

        }

    }


?>