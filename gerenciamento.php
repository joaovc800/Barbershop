<?php
    session_start();
    include('conexao.php');
    $data = $_POST['data_excluir'];
    
     if(empty($_POST['data_excluir'])){
        $_SESSION['data_vazia'] = true;
        header("Location: gerenciar.php");
        exit();
     }

    $query = "DELETE FROM agendamentos WHERE data = '$data'";
    
    $deletar = mysqli_query($conexao,$query);

    if($deletar == TRUE){
        $_SESSION['deletado'] = true;
        header("Location: gerenciar.php");
        exit();
    }else{
        $_SESSION['nao_deletado'] = true;
        header("Location: gerenciar.php");
        exit();
    }
 mysqli_close($conexao);


?>
