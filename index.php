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
              background: url('imgs/fundo2.jpg');
              background-size: 100% 100%;
              background-attachment: fixed;
              height: 80vh;
          }
          .h1{
            font-size: 60px;
            font-family: cursive;
          }

          .lead{
            font-size: 30px;
            text-align: justify;
          }
          small{
            font-family: monospace;
          }
          .f{
            font-family: monospace;
            font-size: 11px;
          }
          .p{
            clear: right;
          }
          
      </style>
  </head>
    <body>
      <div class="fundo container-fluid">
        <div class="container">
          <br><br><br><br><br><br>
          <h1 class="h1 text-center text-light">- Barbearia -</h1>
          <h1 class="h1 text-center text-light">Tiko's</h1> 
        </div>
      </div>
      <div class="mt-5 container">
        <div class="row g-3">
          <div class="col-md-6">
            <img src="https://static.wixstatic.com/media/43c038_88e1cc895937468ea9143ca69c933bf6~mv2_d_3104_4656_s_4_2.jpg/v1/fill/w_534,h_756,al_c,q_85,usm_0.66_1.00_0.01/43c038_88e1cc895937468ea9143ca69c933bf6~mv2_d_3104_4656_s_4_2.webp" alt="" style="width:500px;height:550px;object-fit:cover;object-position:50% 50%">
          </div>
          <div class="col-md-6">
            <h1 class="h1">Sobre</h1>
            <p class="lead">
              A Tikos foi criada para propiciar um serviço de excelência dentro de um espaço todo voltado para o homem, onde além de poder tomar aquela gelada você pode ter a certza que vai sair satisfeito com os melhores cortes da região, venha conferir já nossa barbearia!
            </p>
            <div class="row mt-5">
              <a class="button btn btn-outline-dark btn-lg" href="login_usuario.php" target="_blank">Agende seu horário</a>
            </div>
            <div class="row mt-4">
                <a class="text-center" href="https://www.instagram.com/bieel_barbeiro/" title="Instagram">
                    <img width="50px" src="imgs/insta.png">
                </a>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5 container">
        <div class="row g-3">
          <div class="col-12">
            <h1 class=" h1 text-center">Galeria</h1>
            <div class="row">
              <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img
                  src="imgs/corte1.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />

                <img
                  src="imgs/corte2.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                  src="imgs/corte3.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />

                <img
                  src="imgs/corte4.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />
              </div>

              <div class="col-lg-4 mb-4 mb-lg-0">
                <img
                  src="imgs/corte5.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />

                <img
                  src="imgs/corte6.jpeg"
                  class="w-100 shadow-1-strong rounded mb-4"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <h1 class="h1 text-center">Nossos contatos</h1>
      </div>
      <div class="bg-dark container mt-5">
        <div class="row">
        <div class="col-sm-4">
          <p class="h3 text-center text-light">FALE CONOSCO</p>
          <small><p class="text-center text-light">Telefone: (xx) xxx-xxx</p></small>
          <small><p class="text-center text-light">E-mail: xxx@.br</p></small>
        </div>
        <div class="col-sm-4">
          <p class="h3 text-center text-light">ENDEREÇO</p>
          <small><p class="text-center text-light">Rua: João Gomes Pereira, 1304</p></small>
          <small><p class="text-center text-light">São Paulo, Brasil</p></small>
        </div>
        <div class="col-sm-4">
          <p class="h3 text-center text-light">HORÁRIOS</p>
          <small><p class="text-center text-light">Segunda à Sábado - 09h a 18h</p></small>
          <small><p class="text-center text-light">Domingos: fechado</p></small>
        </div>
        </div>
      </div>
      <div class="row g-0">
      <iframe class="mt-5 w-100"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.32832071663!2d-46.49609898483267!3d-23.592555368630574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce67bf1c9de20b%3A0x7e5e97274e9802cb!2sR.%20Jo%C3%A3o%20Gomes%20Pereira%2C%201304%20-%20Jardim%20Tiete%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2003945-120!5e0!3m2!1spt-BR!2sbr!4v1622243930171!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="row g-0">
        <footer class="bg-dark">
          <br>
          <p class="f text-center text-light">Barbearia Tiko's</p>
          <p class="f text-center text-light">Rua João Gomes Pereira, 1304 - CEP  03945-120 - São Paulo - SP - Jardim Tietê</p>
          <p class="f text-center text-light">Copyright © 2017, TODOS OS DIREITOS RESERVADOS.</p>
          <div class="fixed-bottom">
              <a class="" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511999999999">
                <img width="70px" src="imgs/wpp.png">
              </a>
          </div>
        </footer>
      </div>
    </body>
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
