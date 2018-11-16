<?php 
include 'modelEspec.php';

if (isset($_POST['cadastrar'])){
    
    $modelo = new ModelEspec();

    $espec = new Espec();

    $espec->setDescricao($_POST['descricao']);

    $modelo->adicionar($espec);
}
  

$modelo= new ModelEspec();


?>
