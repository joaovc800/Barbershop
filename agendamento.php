<?php
session_start();
include('conexao.php');

if(empty($_POST['nome_completo']) || empty($_POST['agendamento']) || empty($_POST['horario'])){
    $_SESSION['campos_vazios'] = true;
    header('Location: agendar.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao,$_POST['nome_completo']);
$user = mysqli_real_escape_string($conexao,$_SESSION['usuario']);
$data_agendamento = mysqli_real_escape_string($conexao,$_POST['agendamento']);
$horario = mysqli_escape_string($conexao,$_POST['horario']);

$sql = "select count(*) as total from agendamentos where hora = '$horario' AND `data` = '$data_agendamento'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['agendamento_existe'] = true;
	header('Location: agendar.php');
	exit;
}

$sql = "INSERT INTO `agendamentos` (`id`,`nome`,`user`,`data`,`hora`) VALUES (NULL,'{$nome}','{$user}','{$data_agendamento}','{$horario}')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['agendado'] = true;
}

$conexao->close();

$vmail = "joao.costa.costa@uni9.edu.br";
$assunto = "Novo agendamento no site da Tiko's";
$vmsg = "Um novo agendamento foi realizado no site por ".$nome;

mail($vmail,$assunto,$vmsg);

header('Location: agendar.php');
exit();

?>
