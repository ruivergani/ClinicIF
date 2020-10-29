<?php
require_once("cabecalho.php");
require_once("valida_session.php");
?>
<!------ PAGINA PRINCIPAL ----->
<section id="servico">
  <div class="container">
    <div class="row">

      <div class="col- col-sm-6 col-md-6 col-lg-4 servico-item">
        <a href="students/index.php" class="servico-link">
          <div class="servico-hover">
            <div class="servico-hover-content">
              <i class="fas fa-user-graduate fa-3x"></i>
            </div>
          </div>
          <img src="img/servicos/estudante.jpg" class="img-fluid" alt="">
        </a>
        <div class="servico-caption">
          <h5>Alunos</h5>
          <p class="text-muted">Acesse o conteúdo!</p>
        </div>
      </div>

      <div class="col- col-sm-6 col-md-6 col-lg-4 servico-item">
        <a href="medicals/index.php" class="servico-link">
          <div class="servico-hover">
            <div class="servico-hover-content">
              <i class="fas fa-user-md fa-3x"></i>
            </div>
          </div>
          <img src="img/servicos/consulta.jpeg" class="img-fluid" alt="">
        </a>
        <div class="servico-caption">
          <h5>Consulta Médica</h5>
          <p class="text-muted">Registre uma consulta!</p>
        </div>
      </div>

      <div class="col- col-sm-6 col-md-6 col-lg-4 servico-item">
        <a href="products/index.php" class="servico-link">
          <div class="servico-hover">
            <div class="servico-hover-content">
              <i class="fas fa-capsules fa-3x"></i>
            </div>
          </div>
          <img src="img/servicos/remedio.jpg" class="img-fluid" alt="">
        </a>
        <div class="servico-caption">
          <h5>Remédios</h5>
          <p class="text-muted">Consulte um medicamento!</p>
        </div>
      </div>

      <div class="col- col-sm-6 col-md-6 col-lg-4 servico-item">
        <a href="users/index.php" class="servico-link">
          <div class="servico-hover">
            <div class="servico-hover-content">
              <i class="fas fa-users fa-3x"></i>
            </div>
          </div>
          <img src="img/servicos/usuario.jpg" class="img-fluid" alt="">
        </a>
        <div class="servico-caption">
          <h5>Funcionários</h5>
          <p class="text-muted">Edite um funcionário!</p>
        </div>
      </div>

    </div>
  </div>
</section>
 
<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php $db = open_database(); ?>

<?php if ($db) : ?>

            
<?php else : ?>
  <div class="alert alert-danger" role="alert">
    <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
  </div>
<?php endif; ?>

<?php
require_once("topo.php");
require_once("rodape.php");
?>