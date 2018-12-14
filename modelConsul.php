<?php
include 'consul.php';

class ModelConsul{

    public function adicionar(Consul $consul){
        include 'bd.php';
        
        $query = "INSERT INTO consultas(id_paciente, id_especialidade, id_medico, data_hora)
              VALUES (:id_paciente, :id_especialidade, :id_medico, :data_hora)";

        $statement = $connection->prepare($query);

        $valores = array();
        $valores[':id_paciente'] = $consul->getIdPaciente();

        $valores[':id_especialidade'] = $consul->getIdEspecialidade();

        $valores[':id_medico'] = $consul->getIdMedico();

        $valores[':data_hora'] = $consul->getDataHora();

        $result = $statement->execute($valores);
        
         if(  empty($result) ){
          print "<br>Nao inseriu";
          print_r(  $statement->errorInfo()  );
        }else{
          print "<br>Deu certo inserir";
        }
    }
    
    
    public function editar(){
        
    }
    
    
    public function listar(){
        include 'bd.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, id_cliente, id_medico, data_hora from consultas";
        
        //prepara a query
        $statement = $connection->prepare($query);
        
        //executar o comando sql
        $result = $statement->execute();
        
        //juntar todos os resultados do select em um vetor de arrays
        $result = $statement->fetchAll();


        
        return $result;
        
    }
    
    
    public function remover(){
        
    }
    
    


}

?>
