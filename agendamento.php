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
}

$conexao->close();

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.positus.global/v2/sandbox/whatsapp/numbers/6334ea09-d3fe-4689-8acb-684eb0d0ec78/messages",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n  \"to\": \"+5511986287128\",\r\n  \"type\": \"text\",\r\n  \"text\": {\r\n      \"body\": \"<b>Um novo agendamento foi feito no site da barbearia tikos</> \n Cliente: <b>$nome</b> \n Data: <b>$data_agendamento</b> Horário: <b>$horario hrs</b>\"\r\n  }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDIwNzhkNDRlMWY5MzY2MWMxM2U2NTUwYWUxODk4MmJiMTBlZGNmOWFhYzc3NmQzM2Y2OTIxYzIyNGQ5MjRmNDkyNTAzYjlkOWRhZmJjZDciLCJpYXQiOjE2MjI2NjUyNzcsIm5iZiI6MTYyMjY2NTI3NywiZXhwIjoxNjU0MjAxMjc3LCJzdWIiOiIzMjgyIiwic2NvcGVzIjpbXX0.jXT_5_U7hD-QrKrdykgExnWBGQAZBi_imEtxxx33jGdVTqZRESmi_O_VsZFAmfC1cyae7DEZL7kVjprx1FUPFx3JReOUsc6m3z7e2Gv1PdVPyRyyfZb0RuBizBgMREAUzTm0u9qrV1Y_RBYlRMNpBXYxu7AL2Mqov4XuwRi9bLnxyA8laN34DMNTEYn23oNkIVlycjS0W4gnlZDZdEhM7wjUrQb_ElpdfdeLxNzrvIHyUCfwyKJg7hl2D3eSYxtlFGsXyzdjqj5fCyXEsPZeTZ2xYiuAq53BB3g36tB8HKVxr4_Z8_Mc7oGXlUE__s2C49EcziGQN4wqV_I8dYCB2SPEg1l1Cv-nD6R1-yQo9uyoq2gYk3_gn_vsgH5-27VcbuDo8fJlNqg3ftThwkjzb0D4kLEeP0mRlkKogzAt8oM9x0_mVF7bonS9FlCzjLTa8S_bWrCa6KnSdwKS8wdb6Ge8tKKejMVt-_EtL7OXasp2g-d6LStwTlU3Zt0HwV4NZDAoMcdE3Wvtcy3vWXM3zGOwQU20HkbIFwrO-qhoLB0bKY5SI5jDMuzDSM8dboHGnLG0bGGpO_ozhlsvH6v3Z0EECWNBEohz_bfnueTckfLSRCJAwHVG-5nCE63cnFpSI5t72YhdXvWaDeXBZI3oNnkcxrdigCfNd2GrsMAXfFc"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;




header('Location: agendar.php');
exit();

?>
