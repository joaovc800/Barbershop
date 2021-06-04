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
    <style>
        body{
            background-color:#fefefe;
        }
    </style>
</head>
<body class="text-center">
    <div class="container">
        <form action="login.php" method="POST">
            <img class="mb-4" src="imgs/logo.jpeg" width="350" height="320">
            <div class="container col-md-4">      
                <div class="mb-3">
                    <input name="usuario" type="email" class="form-control form-control-lg" placeholder="Digite seu e-mail">
                </div>
            </div>
            <div class="container col-md-4">
                <div class="mb-3">
                    <input name="senha" type="password" class="form-control form-control-lg" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="form-control-lg btn btn-outline-dark w-100">Acessar</button>
                <br><br>
                <a href="cadastrar.php">Cadastre-se</a>
            </div>
        </form>
        <div class="mt-3 container-md w-50">
            <hr>
        </div>
        <p class="fw-light">Barber Shop Tiko's</p>
        <p class="fw-light">All rights reserved</p>
    </div>
    <ul class="squares"></ul>
    <script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
