<?php
include 'espec.php';

class ModelEspec{

    public function adicionar(Espec $espec){
        include 'bd.php';
            
        $query = "INSERT INTO especialidades (descricao) 
              VALUES (:descricao)";

        $statement = $connection->prepare($query);

        $valores = array();
        $valores[':descricao'] = $espec->getDescricao();

        $result = $statement->execute($valores);

    }
    
    
    public function editar(){
        
    }
    
    
    public function listar(){
        include 'bd.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, descricao from especialidades";
        
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
