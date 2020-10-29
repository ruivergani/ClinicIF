<?php
require_once("valida_session.php");
?>
<?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gerenciador Hospitalar | ClinicIF</title>
    <link rel="icon" href="img/faviconmedico2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="interface">
    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-gradiente">
        <div class="container">
            <a class="navbar-brand" href="principal.php">
                <img alt="Brand" src="img/faviconmedico2.png" class="img-fluid"><span id="texto" class="text-uppercase text-center">Clinic<span id="if">if</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item text-center">
                        <a class="nav-link waves-effect" href="conteudo.php"><button type="button" class="btn btn-primary light-blue"><i class="fas fa-lg fa-user-shield"></i></button></a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link waves-effect" href="logout.php"><button type="button" class="btn btn-primary light-blue">Sair <i class="fas fa-sign-out-alt"></i></button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="colors-line"></div>

  <!-- PAGINA PRINCIPAL -->
  <div class="container-fluid">