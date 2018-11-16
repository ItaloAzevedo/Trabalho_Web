<?php 
    class Espec{
        private $descricao;
        private $id;

		  public function getId(){
            return $this->id;
        }
        public function setId($a){
             $this->id = $a;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }
        
        public function setDescricao($a){
             $this->descricao = $a;
        }
    }

?>
