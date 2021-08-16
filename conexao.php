<?php
$hostname = "localhost";
$usuario = "root";
$senha="";
$db="barbearia_tikos";

$conexao = mysqli_connect($hostname,$usuario,$senha,$db) or die ("Não foi possivel conectar ao banco");

// arruma a acentuação
mysqli_query($conexao,"SET NAMES 'utf8'");  
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');  
mysqli_query($conexao,'SET character_set_results=utf8'); 
?>
