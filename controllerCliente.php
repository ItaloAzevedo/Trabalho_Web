<?php 
include 'modelCliente.php';

//se clicou no botão
if (isset($_POST['cadastrar'])){
    
    $modelo = new ModelCliente();

    //criar objeto da classe 
    $cliente = new Cliente();
    //preenche o objeto com os dados do formulário
    $cliente->setNome($_POST['nome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setLogin($_POST['login']);
    $cliente->setSenha($_POST['senha']);
    $cliente->setCpf('cpf');

    //chama a função adicionar do modelo para adicionar o usuario
    $modelo->adicionar($cliente);
}

var_dump($cliente);


?>
