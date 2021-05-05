<?php
    class Usuario {
        private  $nome ;
        private  $dataNasc;
        private  $sexo;
        private  $login;
        private  $senha;
        private  $email;
        
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setDataNasc($dataNasc){
            $this->dataNasc = $dataNasc;
            
        }
         public function setSexo($sexo){
            $this->sexo = $sexo;
            
        }
         public function setLogin($login){
            $this->login = $login;
            
        }
         public function setSenha($senha){
            $this->senha = $senha;
            
        }
         public function setEmail($email){
            $this->email = $email;
            
        }
        
         public function getNome(){
            return $this->nome;
        }
        public function getDataNasc(){
            return $this->dataNasc;
            
        }
        public function getSexo(){
            return $this->sexo;
            
        }
         public function getLogin(){
            return $this->login;
            
        }
         public function getSenha(){
            return $this->senha;
            
        }
         public function getEmail(){
            return $this->email;
            
        }
         
        
    }
?>

