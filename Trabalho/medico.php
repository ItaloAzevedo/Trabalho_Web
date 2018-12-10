<?php 
    class Medico{
        private $id;
        private $id_funcao;
        private $nome;
        private $email;
        private $login;
        private $senha;
        private $cpf;
            
            
        public function getId(){
            return $this->id;
        }


        public function getIdFuncao(){
            return $this->id_funcao;
        }
        
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getEmail(){
            return $this->email;
        }
        
        
        public function getLogin(){
            return $this->login;
        }
        
        
        public function getSenha(){
            return $this->senha;
        }
        
        public function getCpf(){
            return $this->cpf;
        }
        
        
        
        public function setId($a){
             $this->id = $a;
        }
        
        public function setIdFuncao($a){
             $this->id_funcao = $a;
        }

        public function setNome($a){
             $this->nome = $a;
        }
        
        public function setEmail($a){
             $this->email = $a;
        }
        public function setLogin($a){
             $this->login = $a;
        }
        
        public function setSenha($a){
             $this->senha = $a;
        }
        
        public function setCpf($a){
             $this->cpf = $a;
        }
    }

?>