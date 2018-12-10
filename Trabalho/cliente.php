<?php 
    class Cliente{
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
        public function setId($a){
             $this->id = $a;
        }
        
        public function getIdFuncao(){
            return $this->id_funcao;
        }
        
        public function setIdFuncao($a){
             $this->id_funcao = $a;
        }
          public function getNome(){
            return $this->nome;
        }
        
        public function setNome($a){
             $this->nome = $a;
        }
          public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($a){
             $this->email = $a;
        }
        public function getLogin(){
            return $this->login;
        }
        
        public function setLogin($a){
             $this->login = $a;
        }
            public function getSenha(){
            return $this->senha;
        }
        
        public function setSenha($a){
             $this->senha = $a;
        }
             public function getCpf(){
            return $this->cpf;
        }
        
        public function setCpf($a){
             $this->cpf = $a;
        }
    
    }

?>
