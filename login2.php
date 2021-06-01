<?php
include('conexao.php');
session_start();

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: login_usuario.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']); // primeiro puxa a conexao depois o usuario e proteje contra SQL injection
$senha = mysqli_real_escape_string($conexao, md5($_POST['senha'])); // primeiro puxa a conexao depois a senha e proteje contra SQL injection

$queryBuscarUsuario2 = "SELECT * FROM usuarios WHERE id = 114 AND email = '{$usuario}' AND senha = md5('{$senha}')";

$resultado2 = mysqli_query($conexao,$queryBuscarUsuario2);

$row2 = mysqli_num_rows($resultado2); // se encontrar o resultado ela vai retornar true que é igual à 1

if ($row2 == 1){
    $_SESSION['usuario_adm'] = $usuario; //autenticado armazena a sessão na variavel usuario
    header('Location: administrador.php'); //leva para pagina desejada
    exit();
}else{
    header('Location: login_adm.php'); // se não estiver autenticado ela volta para index
    exit();
}

?>
