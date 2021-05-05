<?php
    class Comentario{
        private $usuario;
        private $corpo;
        private $denuncias;
        private $dataHora;
        private $cod;
        private $local;
        
        public function setUsuario($usuario){
            $this->usuario = $usuario;
            
        }
        public function setCorpo($corpo){
            $this->corpo = $corpo;
            
        }
        public function setDenuncias($denuncias){
            $this->denuncias = $denuncias;
            
        }
        public function setDataHora($dataHora){
            $this->dataHora = $dataHora;
            
        }
        public function setCod($cod){
            $this->cod = $cod;
        }
        public function setLocal($local){
            $this->local = $local;
        }
        
        public function getUsuario(){
            return $this->usuario;
            
        }
        public function getCorpo(){
           return $this->corpo;
            
        }
        public function getDenuncias(){
           return $this->denuncias;
            
        }
        public function getDataHora(){
            return $this->dataHora;
            
        }
        public function getCod(){
            return $this->cod;
        }
         public function getLocal(){
            return $this->local;
        }
        
        
    }

?>