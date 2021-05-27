<?php
    session_start();
    include('conexao.php');
    include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Tiko's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta property="og:site_name" content="Barbearia Tiko's">
    <meta property="og:title" content="Barbearia Tiko's">
    <meta property="og:description" content="Agende seu horário com as melhores disponibilidades e preços">
    <meta name="description" content="Agende seu horário com as melhores disponibilidades e preços?">
    <meta property="og:image" content="imgs/logo.jpeg">
    <meta property="og:image" itemprop="image" content="https://barbeariatikos.herokuapp.com/imgs/logo.jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:url" content="https://barbeariatikos.herokuapp.com/">
    <link rel="shortcut icon" href="imgs/logo.jpeg"/>
    <style>
        .fundo{
            background:!important url('imgs/fundo2.jpg') no-repeat;
            background-size:!important 100% 100%;
        }
    </style>
</head>
<body>
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid menu">
          <a class="navbar-brand" href="menu.php" title="Home">Barbearia Tiko's</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="agendar.php">Agendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="meusAgendamentos.php">Meus agendamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="fundo container-fluid h-100">
        <div class="py-5 text-center">
            <br>
          <h2 class="text-light">SEUS AGENDAMENTOS</h2>
        </div>
        <div class="container">
            <div class="container">
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">NOME</th>
                            <th class="text-center" scope="col">DATA AGENDADA</th>
                            <th class="text-center" scope="col">HORÁRIO AGENDADO</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php
                
                $sessao = $_SESSION['usuario'];

                $query = "SELECT *,DATE_FORMAT(`data`,'%d/%m/%Y') as data_formatada,TIME_FORMAT(hora, '%H:%i') as hora_formatada FROM `agendamentos` WHERE user = '{$sessao}'";
                

                $resultado = mysqli_query($conexao, $query);
                

                $row = mysqli_num_rows($resultado);
                
                while($coluna = mysqli_fetch_array($resultado)){ // Enquanto houver dados ficará em loop
                   $a = $coluna['nome'];
                   $b = $coluna['data_formatada'];
                   $c = $coluna['hora_formatada'];
                   $id = $coluna['id'];  
            ?>
                    <tr>
                        <th class="text-center"scope="row"><?php echo $id?></th>
                        <td class="text-center"><?php echo $a?></td>
                        <td class="text-center"><?php echo $b?></td>
                        <td class="text-center"><?php echo $c?></td>
                    </tr>
            <?php
                }
            ?>
                </tbody>
            </table>    
            </div>
        </div>
    </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
