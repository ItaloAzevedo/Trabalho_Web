<?php 
include 'modelMedico.php';

//se clicou no botão
if (isset($_POST['cadastrar'])){
    
    $modelo = new ModelMedico();

    //criar objeto da classe 
    $medico = new Medico();
    //preenche o objeto com os dados do formulário
    $medico->setNome($_POST['nome']);
    $medico->setEmail($_POST['email']);
    $medico->setLogin($_POST['login']);
    $medico->setSenha($_POST['senha']);
    $medico->setCpf($_POST['cpf']);

    //chama a função adicionar do modelo para adicionar o usuario
    $modelo->adicionar($medico);
}


?>