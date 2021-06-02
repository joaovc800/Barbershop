<?php
    session_start();
    include('conexao.php');
    $nome = $_POST['nome_excluir'];
    
     if(empty($_POST['nome_excluir'])){
        $_SESSION['nome_vazio'] = true;
        header("Location: gerenciar.php");
        exit();
     }
    $query2 = "SET SQL_SAFE_UPDATES=0";
    $query = "DELETE FROM agendamentos WHERE  nome = '$nome'";
    
    $safe_mode = mysqli_query($conexao,$query2);
    $deletar = mysqli_query($conexao,$query);

    if($deletar == TRUE){
        $_SESSION['deletado2'] = true;
        header("Location: gerenciar.php");
        exit();
    }else{
        $_SESSION['nao_deletado2'] = true;
        header("Location: gerenciar.php");
        exit();
    }
 mysqli_close($conexao);


?>
