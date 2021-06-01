<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Tiko's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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
<div class="container">
        <div class="py-5 text-center">
          <h2>Cadastre-se e agende seu horário</h2>
        </div>
        <?php
            if($_SESSION['status_cadastro']):
            ?>
            <div class="card bg-success">
                <div class="card-body">
                    <p class="text-light">Cadastro efetuado!</p>
                    <p class="text-light">Faça login informando o seu usuário e senha <a class="text-light" href="login_usuario.php">aqui</a></p>
                </div>
            </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro'])
            ?>
            <?php
            if($_SESSION['usuario_existe']):
            ?>
            <div class="card bg-info">
                <div class="card-body">
                    <p class="text-light">O usuário escolhido já existe em nosso sistema. Informe outro e tente novamente.</p>
                </div>
            </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe'])
            ?>
            <?php
            if($_SESSION['usuario_invalido']):
            ?>
            <div class="card bg-danger">
                <div class="card-body">
                    <p class="text-light">Nenhum campo pode ficar vázio!</p>
                </div>
            </div>
            <?php
            endif;
            unset($_SESSION['usuario_invalido'])
            ?>
            <?php
            if($_SESSION['senha_nao_corresponde']):
            ?>
            <div class="card bg-danger">
                <div class="card-body">
                <p class="text-light">Senhas não correspondem, por favor tente novamente!</p>
                </div>
            </div>
            <?php
            endif;
            unset($_SESSION['senha_nao_corresponde'])
            ?>
        <div class="container">
            <h4 class="mb-3">Digite seus dados</h4>
            <form action="criarconta.php" method="POST" class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label">Nome completo</label>
                  <input name="nome" type="text" class="form-control" placeholder="Nome completo">
                </div>
                <div class="col-sm-6">
                  <label class="form-label">E-mail</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input name="email" type="email" class="form-control" placeholder="Digite seu e-mail">
                  </div>
                </div>
                <div class="col-12">
                  <label class="form-label">Data de nascimento</label>
                  <input name="data_nasc" type="date" class="form-control" placeholder="Digite o assunto">
                </div>
                <div class="col-12">
                  <label class="form-label">Digite sua senha</label>
                  <input name="senha1"type="password" class="form-control" placeholder="Digite sua senha" required>
                </div>
                <div class="col-12">
                  <label class="form-label">Confirme a senha</label>
                  <input name="senha2" type="password" class="form-control" placeholder="Confirme a senha">
                </div>
              </div>
              <hr class="my-4">
              <button class="w-100 btn btn-outline-dark btn-lg mb-4" type="submit">Cadastrar</button>
            </form>
          </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
