<?php 
    class Consul{
        private $id;
        private $id_paciente;
        private $id_especialidade;
        private $id_medico;
        private $data_hora;

		public function getId(){
            return $this->id;
        }
        public function setId($a){
             $this->id = $a;
        }
        
        public function getIdPaciente(){
            return $this->id_paciente;
        }
        
        public function setIdPaciente($a){
             $this-> id_paciente = $a;
        }
        public function getIdEspecialidade(){
            return $this-> id_especialidade;
        }
        public function setIdEspecialidade($a){
             $this-> id_especialidade = $a;
        }
        public function getIdMedico(){
            return $this-> id_medico;
        }
        public function setIdMedico($a){
             $this-> id_medico = $a;
        }
        
        public function getDataHora(){
            return $this-> data_hora;
        }
        
        public function setDataHora($a){
             $this-> data_hora = $a;
        }

    }

?>
