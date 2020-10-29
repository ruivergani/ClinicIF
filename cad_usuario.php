<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Área de Cadastro | ClinicIF</title>
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
      <div class="col col-sm-6 col-md-5 col-lg-4 col-xl-3 back" id="bloco">
            <h1 class="text-center entrada-title">CADASTRAR NOVO USUÁRIO</h1>

            <form id="form" data-toggle="validator" role="form" class="form-signin" action="cad_usuario_envia.php" method="post">
                    <div class="form-group">
                      <label for="usuario" class="control-label">Nome de Usuário:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
							            <span class="input-group-text" data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu usuário ao lado</strong>"><i class="fas fa-user"></i></span>
						            </div>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de Usuário" data-error="Por favor, preencha este campo." required>
                      </div>
                      <small class="help-block with-errors"></small>
                    </div>
                  
                    <div class="form-group">
                      <label for="email" class="control-label">E-mail:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu e-mail ao lado</strong>"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@gmail.com" name="email" data-error="Por favor, digite um e-mail correto." required>
                      </div>
                      <small class="help-block with-errors"></small>
                    </div>

                    <div class="form-group">
                      <label for="cargo" class="control-label">Cargo do Funcionário:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite seu cargo ao lado</strong>"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" id="cargo" placeholder="Ex: Médica" name="cargo" required>
                      </div>
                      <small class="help-block with-errors small"></small>
                    </div>
                    
                    <div class="form-group">
                      <label for="inputPassword" class="control-label">Senha:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Digite sua senha ao lado</strong>"><i class="fa fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Senha" name="senha" required>
                      </div>
                      <small class="help-block"> Mínimo de 8 digítos</small>
                    </div>

                    <div class="form-group">
                      <label for="InputPasswordConfirm" class="control-label">Confirmar Senha:</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"  data-toggle="tooltip" data-placement="bottom" title="" data-html="true" data-original-title="<strong>Repita sua senha!</strong>"><i class="fa fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" class="form-control" id="InputPasswordConfirm" name="conf_senha" placeholder="Confirmar Senha" data-match="#inputPassword" data-match-error="Ops, as senhas não estão iguais!" required>
                        </div>
                      <small class="help-block with-errors"></small>
                    </div> 
                                
                    <button type="submit" class="btn btn-outline-primary active">Cadastrar</button>
                    <a href="index.php" class="btn btn-outline-danger">Cancelar</a>
                </form>
      </div>
    </div>
  </div>
  
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/conteudo.js"></script>  
  <script src="js/jquery.mask.min.js"></script>
  
  <!-- fim div com flex para centralizar div filha ao centro -->
	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>