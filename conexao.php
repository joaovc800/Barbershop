<?php
$hostname = "us-cdbr-east-03.cleardb.com";
$usuario = "beae95e9b852d5";
$senha="b9291e2c";
$db="heroku_9300d2be9984f63";

$conexao = mysqli_connect($hostname,$usuario,$senha,$db) or die ("Não foi possivel conectar ao banco");
?>
