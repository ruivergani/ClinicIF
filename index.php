<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Área de Login | ClinicIF</title>
    <link rel="icon" href="img/faviconmedico2.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/entrada.css">
	<script src="js/script.js"></script>
</head>

<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col col-sm-7 col-md-6 col-lg-5 col-xl-3 fundo">
				<h1 class="text-center entrada-title">ACESSAR O SISTEMA</h1>
				<img class="perfil-img img-fluid" src="img/avatar.png">

				<?php
				session_start();
				if(isset($_SESSION['loginErro'])){
				?>
				<div class="alert alert-danger alert-dismissable text-center">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
					&times;
				</button>
					<strong><?=$_SESSION['loginErro'];?></strong>
				</div>
				<?php
					unset($_SESSION['loginErro']);		
				}
				?>
				
				<form class="form-signin" action="login.php" method="post">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-md fa-lg"></i></span>
						</div>
						<input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-unlock-alt fa-lg"></i></span>
						</div>
						<input type="password" class="form-control" name="senha" placeholder="Senha" minlength="8" required>
					</div>
					<button type="submit" class="btn btn-outline-primary btn-lg btn-block">Entrar <span class="fas fa-sign-in-alt"></span>
					</button>
					<div class="help">
						<a href="cad_usuario.php" class="nova-conta">Criar Conta</a>
						<a href="esqueci_senha.php" class="precisa-ajuda">Esqueceu a sua senha?</a><span class="clearfix"></span>
					</div>
				</form>

			</div>
		</div>
	</div>
	
	<!-- fim div com flex para centralizar div filha ao centro -->
	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script src="js/index.js"></script>
</body>
</html>