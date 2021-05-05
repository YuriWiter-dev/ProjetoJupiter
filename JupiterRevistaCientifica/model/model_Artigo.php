<?php
    class Artigo{
        private $assunto;
        private $areaAtuacao;
        private $autor;
        private $dataPub;
        private $cod;
        private $titulo;
        
        public function setAssunto($assunto){
            $this->assunto = $assunto ;
        }
        public function setAreaAtuacao($areaAtuacao){
            $this->areaAtuacao = $areaAtuacao ;
        }
         public function setAutor($autor){
            $this->autor = $autor;
        }
        public function setDataPub($dataPub){
            $this->dataPub = $dataPub;
        }
        public function setCod($cod){
            $this->cod = $cod;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function getAssunto(){
            return $this->assunto;
        }
        public function getAreaAtuacao(){
            return $this->areaAtuacao;
        }
        public function getAutor(){
            return $this->autor;
        }
        public function getDataPub(){
            return $this->dataPub;
        }
        public function getCod(){
            return $this->cod;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        
    }

?>