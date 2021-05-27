<?php
session_start();
include("conexao.php");

if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha1']) || empty($_POST['senha2'])){
	$_SESSION['usuario_invalido'] = true;
	header('Location: cadastrar.php');
    exit();
}
$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$data_nasc = mysqli_real_escape_string($conexao,$_POST['data_nasc']);
$senha1 = mysqli_real_escape_string($conexao, md5($_POST['senha1']));
$senha2 = mysqli_real_escape_string($conexao, md5($_POST['senha2']));

if($senha1 != $senha2){
	$_SESSION['senha_nao_corresponde'] = true;
	header('Location: cadastrar.php');
	return;
}
	

$sql = "select count(*) as total from usuarios where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastrar.php');
	exit;
}

$sql = "INSERT INTO `usuarios` (`id`, `nome`,`data_nasc`,`email`, `senha`) VALUES (NULL, '{$nome}','{$data_nasc}','{$email}', MD5('{$senha2}'))";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: agendar.php');
exit;
?>
