<?php
    class Projeto{
        private $pesquisador; //pesquisador é o login do pesquisador. No caso de salvar no bd, será chave estrangeira, ok? 
        private $orientador;
        private $areaAtuacao;
        private $ano;
        private $resumo;
        private $arquivo;
        private $dataHoraPub; 
        private $cod;
        private $titulo;
        private $descricao;
        
        
        
        public function setPesquisador($pesquisador){
            $this->pesquisador = $pesquisador;
        }
        public function setOrientador($orientador){
            $this->orientador = $orientador;
        }
        public function setAreaAtuacao($areaAtuacao){
            $this->areaAtuacao = $areaAtuacao;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
        public function setResumo($resumo){
            $this->resumo = $resumo;
        }
        public function setArquivo($arquivo){
            $this->arquivo = $arquivo;
        }
        public function setDataHoraPub($dataHoraPub){
            $this->dataHoraPub = $dataHoraPub;
        }
        public function setCod($cod){
            $this->cod = $cod;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        
        public function getPesquisador(){
            return $this->pesquisador ;
        }
        public function getOrientador(){
            return $this->orientador ;
        }
        public function getAreaAtuacao(){
            return $this->areaAtuacao ;
        }
        public function getAno(){
            return $this->ano ;
        }
        public function getResumo(){
            return $this->resumo ;
        }
        public function getArquivo(){
            return $this->arquivo ;
        }
        public function getDataHoraPub(){
            return $this->dataHoraPub;
        }
        public function getCod(){
            return $this->cod;
        }
        public function getTitulo(){
            return $this->titulo;
        }
        public function getDescricao(){
            return $this->descricao;
        }
    }



?>