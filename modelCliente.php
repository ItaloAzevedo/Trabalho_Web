<?php
include 'cliente.php';

class ModelCliente{

    public function adicionar(Cliente $cliente){
        include 'bd.php';
            
        $query = "INSERT INTO usuarios (id_funcao,nome,email, login, senha, cpf) 
              VALUES ('3', :nome, :email, :login, :senha, :cpf)";

        $statement = $connection->prepare($query);

        $valores = array();
        $valores[':nome'] = $clienter->getNome();
        $valores[':email'] = $cliente->getEmail();
        $valores[':login'] = $cliente->getLogin();
        $valores[':senha'] = $cliente->getSenha();
        $valores[':cpf'] = $cliente->getCpf();

        $result = $statement->execute($valores);
    
    }
        public function listar(){
        include 'bd.php';//criei a conexao
        
        //criei a query
        $query = "SELECT id, nome from usuarios WHERE id_funcao = 3";
        
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