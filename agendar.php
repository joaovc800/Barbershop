<?php
    session_start();
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
    <div class="container">
        <div class="py-5 text-center">
          <h2>Faça seu agendamento</h2>
        </div>
        <?php
          if($_SESSION['agendado']){
        ?>
        <div class="container">
            <div class="row">
              <div class="card bg-success">
                <p class="text-center text-light">Horário agendado com sucesso!</p>
                <p class="text-center text-light"> Clique <a class="text-light"href="meusAgendamentos.php">aqui</a> para ver seus agendamentos</p>
              </div>
            </div>
        </div>
        <br>
        <br>
        <?php
          }
          unset($_SESSION['agendado']);
        ?>
        <?php
          if($_SESSION['campos_vazios']){
        ?>
        <div class="container">
            <div class="row">
              <div class="card bg-danger">
                <p class="text-center text-light">Nenhum dos campos podem ficar vázios!</p>
              </div>
            </div>
        </div>
        <br>
        <br>
        <?php
          }
          unset($_SESSION['campos_vazios']);
        ?>
        <div class="container">
            <h4 class="mb-3">Dados para agendamento</h4>
            <form action="agendamento.php" method="POST" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-md-12">
                  <label class="form-label">Nome completo</label>
                  <input name="nome_completo" type="text" class="form-control" placeholder="Nome completo">
                </div>
                <div class="col-12">
                  <label class="form-label">Data de agendamento</label>
                  <input name="agendamento" type="date" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Horário do agendamento</label>
                  <input class="form-control" name="horario" type="time" min="09:30" max="18:30" required>
                </div>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-outline-dark btn-lg mb-4" type="submit">Agendar</button>
            </form>
          </div>
        </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
