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
   CURLOPT_POSTFIELDS =>"{\r\n  \"to\": \"+5511963281818\",\r\n  \"type\": \"text\",\r\n  \"text\": {\r\n \"body\": \"Um novo agendamento foi feito no site da barbearia tikos por $nome para o dia $data_agendamento às $horario hrs\"\r\n  }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTlmNDM2NDE5MTU3NmU0NzQ1NGU1NjMyZjVhYjUyMzEyZTRjNjA4N2Q0MTUwZjgyMjgwOWRlMzE4ODhmNDBmMTg1NjAyZDVjMGRlMzNlOGMiLCJpYXQiOjE2MjI2Njc1NzQsIm5iZiI6MTYyMjY2NzU3NCwiZXhwIjoxNjU0MjAzNTc0LCJzdWIiOiIzMjg0Iiwic2NvcGVzIjpbXX0.nDZ7wGZNk6YfLVhEpARnXIG5D-GeCgRkdE-Cz7rK2gBqHcMP1Z7nAmZd6tTuPp5mKltoZI7r3qiK-PZvWswnVhcS_lUKLTJCgnpyBCVUzLDGNTpwZHmogIRNI5SRHX39rvPBHi9RJfCB8XtfCdeiRSEEOhiaI0YBpOAr5QENvuZWdOHBlFFSBuE3E4A70YxrujPMLxqxaKuXYU4upvokgWTJeH5ox4s5h9yi7f1i-FA7uEwGl2Ocq6iUf2lx0RfPI2r-QZT6ugBDi3TDWzg-W2ldEDplBSHz9lAY_Qeh0F2WNwXzId9MH-R18jBxZQx9QHNP-m3Lb-cmAiiOoZiLPhQ1K9rBVG87IMSnvfQowxMtJIu-t0ZdQGAxTnOZ6NW8J-2A5AwzcZjVJ_aJTY3Pprh4Y8-yxedAJm2LuHtBKH8P-hFAXPNicdA3q6U7c38QpQrEH6yRTl5ixI1GhH8kHTw4PK8XUORCNl9DgnFdKVYaFBWeDw39VUwliMz1A5vOTRzo0SbwsSWOhnJWrWRLNYfjeCUI3JsoueOTOdeLXsD7IfyBdYatZv_xWRPKJXtzhA1tlAa_VUi03siemB3evqJnKS6AUJKvgPPrYV1GbYr4kITvZPyTDnmVCGG5gthOsZXJwCXrmEWiY3z2iOGDOvbUN5FimIaPrV9Vf3aKcko"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;




header('Location: agendar.php');
exit();

?>
