<?php 
include 'modelConsul.php';
include 'modelEspec.php';
include 'modelCliente.php';
include 'modelMedico.php';
if (isset($_POST['agendar'])){
    
    $modelo = new ModelConsul();

    $consul = new Consul();

    $consul->setIdPaciente($_POST['id_paciente']);

    $consul->setIdEspecialidade($_POST['id_especialidade']);

    $consul->setIdMedico($_POST['id_medico']);

    $consul->setDataHora($_POST['data_hora']);

    $modelo->adicionar($consul);
}

$modelo= new ModelConsul();

$modelo= new ModelConsul();
$modeloEspecialidade = new ModelEspec();
$lista_especialidades = $modeloEspecialidade->listar();

$modelo= new ModelConsul();
$modeloCliente = new ModelCliente();
$lista_clientes = $modeloCliente->listar();

$modelo= new ModelConsul();
$modeloMedico = new ModelMedico();
$lista_medicos = $modeloMedico->listar();
?>