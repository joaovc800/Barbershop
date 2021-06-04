<?php
    session_start();
    include('conexao.php');
    include('verifica_login2.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Tiko's</title>
    <link rel="stylesheet" href="css/style2.css" />
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
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
</head>
<body>
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid menu">
          <a class="navbar-brand" href="#" title="Home">Barbearia Tiko's</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="administrador.php">Ver agendamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="gerenciar.php">Gerenciar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="mt-5 container card">
      <div class="card-header bg-dark">
        <h2 class="card-title text-center text-light">Selecione a data para excluir o agendamentos</h2>
      </div>
      <div class="card-body">
        <form action="gerenciamento.php" method="POST">
              <div class="container">
                  <div class="row">
                      <input type="text" class="form-control" id="data" name="data_excluir" placeholder="Selecione uma data">
                      <button class="btn btn-dark mt-2">Excluir</button>
                  </div>
              </div>
          </form>
          <?php
          if($_SESSION['deletado']){
          ?>
            <br><br>
            <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">Os agendamentos referente a data escolhida foram deletados!</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['deletado'])
          ?>
          <?php
          if($_SESSION['data_vazia']){
          ?>
          <br><br>
           <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">O campo acima não pode ficar vazio!</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['data_vazia'])
          ?>
          <?php
          if($_SESSION['nao_deletado']){
          ?>
          <br><br>
             <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">Não temos agendamento para está data</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['nao_deletado'])
          ?>
      </div>
    </div>
    <div class="mt-5 container card">
              <div class="card-header bg-light">
                <h2 class="card-title text-center text-dark">Selecione o nome do cliente para excluir o agendamentos</h2>
            </div>
            <div class="card-body">
              <form action="gerenciamento2.php" method="POST">
                <div class="container">
                  <div class="row">
                      <input type="text" class="form-control" name="nome_excluir" placeholder="Digite o nome">
                      <button class="btn btn-danger mt-2">Excluir</button>
                  </div>
              </div>
            </form>
            <?php
          if($_SESSION['deletado2']){
          ?>
            <br><br>
            <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">O nome escolhido foi deletado do agendamento</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['deletado2'])
          ?>
          <?php
          if($_SESSION['nome_vazio']){
          ?>
           <br><br>    
           <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">O campo acima não pode ficar vázio!</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['nome_vazio'])
          ?>
          <?php
          if($_SESSION['nao_deletado2']){
          ?>
             <br><br>
             <div class="container">
              <div class="row">
                <div class="card bg-danger">
                  <p class="text-center text-light">Não temos cliente com esse nome agendado</p>
                </div>
              </div>
            </div>
          <?php
            }
            unset($_SESSION['nao_deletado2'])
          ?>
          </div>
          </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
    
    <script>
      $('#data').datepicker({
      format: 'dd/mm/yyyy',
      language: "pt-BR",
      //startDate: "+0d",
      daysOfWeekDisabled: "0",
      autoclose: 1,
      });
    </script>
  </body>
</html>
