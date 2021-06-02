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

$sql = "select count(*) as total from agendamentos where `data` = '$data_agendamento' AND user = '$user' ";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['agendamento_existe2'] = true;
	header('Location: agendar.php');
	exit;
}

$sql = "INSERT INTO `agendamentos` (`id`,`nome`,`user`,`data`,`hora`) VALUES (NULL,'{$nome}','{$user}','{$data_agendamento}','{$horario}')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['agendado'] = true;
	
	require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joaoviniciusdacosta800@gmail.com';
    $mail->Password = '13959624@v';
    $mail->Port = 587;

    $mail->setFrom('joaoviniciusdacosta800@gmail.com');
	//$mail->addAddress('endereco1@provedor.com.br');
	//$mail->addAddress('endereco2@provedor.com.br');
 
	$mail->isHTML(true);
	$mail->Subject = 'Novo agendamento';
	$mail->Body = 'Houve um novo agendamento no <strong>Barbearia Tikos</strong>';
	$mail->AltBody = 'Houve um novo agendamento no Barbearia Tikos';



} catch (Exception $e){
    echo "Erro ao enviar ao enviar mensagem: {$mail->ErrorInfo}";
}
}

$conexao->close();



header('Location: agendar.php');
exit();

?>
