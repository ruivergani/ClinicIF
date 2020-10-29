<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recuperar Senha | ClinicIF</title>
    <link rel="icon" href="img/faviconmedico2.png">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/entrada.css">

	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/validator.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>

</head>
<body>
	<!-- particles.js container -->
	<div id="particles-js"></div>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col col-sm-7 col-md-5 col-lg-4 col-xl-3 fundo">
				<h1 class="text-center entrada-title">RECUPERAR SENHA</h1>
				
				<form class="form-signin" data-toggle="validator" role="form" action="esqueci_senha_envia.php" method="post">
					<div class="form-group">
					<p style="text-align: justify;">Caso tenha esquecido sua senha, insira seu e-mail e clique no botão recuperar ou se deseja voltar a página inicial clique no botão cancelar.</p>
					<label for="email" class="control-label">Email:</label>
					<div class="input-group mb3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope fa-lg"></i></span>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" data-error="Por favor, digite um e-mail correto." required>
					</div>
					<small class="help-block with-errors"></small>
					</div>
					<button type="submit" class="btn btn-outline-primary active">Recuperar</button>
					<a href="index.php" class="btn btn-outline-danger">Cancelar</a>
				</form>
			</div>
		</div>
	</div>

   <!-- fim div com flex para centralizar div filha ao centro -->
	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
	<script src="js/index.js"></script>
</body>
</html>