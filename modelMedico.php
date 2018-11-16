<?php
include 'medico.php';

class ModelMedico{
    public function adicionar(Medico $medico){
        include 'bd.php';
            
        $query = "INSERT INTO usuarios (id_funcao, nome, email, login, senha, cpf) 
              VALUES (1, :nome, :email, :login, :senha, :cpf)";

        $statement = $connection->prepare($query);

        $valores = array();
        $valores[':nome'] = $medico->getNome();
        $valores[':email'] = $medico->getEmail();
        $valores[':login'] = $medico->getLogin();
        $valores[':senha'] = $medico->getSenha();
        $valores[':cpf'] = $medico->getCpf();

        $result = $statement->execute($valores);
    }

    
        public function listar(){
        include 'bd.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, nome from usuarios WHERE id_funcao = 1";
        
        //prepara a query
        $statement = $connection->prepare($query);
        
        //executar o comando sql
        $result = $statement->execute();
        
        //juntar todos os resultados do select em um vetor de arrays
        $result = $statement->fetchAll();


        
        return $result;
        }
    }
?>