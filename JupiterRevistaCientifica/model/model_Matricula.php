<?php
    class Matricula{
        private $mat;
        private $uso; //O uso é um inteiro. 1 se a matricula está sendo usada em um cadastro, 0 senão.
        
        public function setMat($mat){
            $this->mat = $mat;
        }
        public function setUso($uso){
            $this->uso = $uso;
        }
        public function getMat(){
            return $this->mat;
        }
        public function getUso(){
            return $this->uso;
        }
    }


?>