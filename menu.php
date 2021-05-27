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

    <style>
        #slide .carousel-inner, #slide .carousel-item{
        height: 90vh;
        }
        .carousel-item img{
        width: 100%;
        height: 500px;
        }
        .carousel-indicators .active{
        background-color: #b99758
        }
        .fundo{
            background: url('imgs/fundo3.jpg');
            background-size: 100% 100%;
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
    <div class="fundo">
    <div class="container">
    <div class="container col-md-6" id="sli">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/corte1.jpeg">
            </div>
            <div class="carousel-item">
              <img src="imgs/corte2.jpeg">
            </div>
            <div class="carousel-item">
              <img src="imgs/corte3.jpeg">
            </div>
            <div class="carousel-item">
              <img src="imgs/corte4.jpeg">
            </div>
            <div class="carousel-item">
              <img src="imgs/corte5.jpeg">
            </div>
            <div class="carousel-item">
              <img src="imgs/corte6.jpeg">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      </div>
    </div>
      <div class="h-75">
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden w-100">
          <div class="my-3 py-3">
            <h2 class="display-5">Outro título</h2>
            <p class="lead">E outra descrição mais engraçadinha ainda.</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;"></div>
        </div>
        <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden w-100 ">
        <div class="my-3 py-3">
          <h2 class="display-5">Outro título</h2>
          <p class="lead">E outra descrição mais engraçadinha ainda.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden w-100">
        <div class="my-3 py-3">
          <h2 class="display-5">Outro título</h2>
          <p class="lead">E outra descrição mais engraçadinha ainda.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
