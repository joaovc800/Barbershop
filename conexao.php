<?php
$hostname = "localhost";
$usuario = "root";
$senha="";
$db="barber_tikos";

$conexao = mysqli_connect($hostname,$usuario,$senha,$db) or die ("Não foi possivel conectar ao banco");
?>
