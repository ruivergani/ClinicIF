<?php
require_once("cabecalho.php");
?>
<!------ PAGINA PRINCIPAL ----->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div id="ger_title">
        <h3 class="text-center">Informações do Software</h3>
        <h6 class="text-center text-muted"><em>Bem Vindo <?= $_SESSION['usuario'] ?>!</em></h6>
        <hr>
      </div>
    </div>
  
    <div id="desenvolvedores">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="./img/user-1.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Livia Bueno Alves</h5>
            <p class="card-text text-justify"> Desenvolvedora Web, utilizei dos recursos do novo Bootstrap 4.0 e do Font Awesome 5.3.1 para estilizar e dar funcionalidade ao Software.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Última atualização 3 minutos atrás</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="./img/user-2.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Jeniffer Tardioli de Menezes</h5>
            <p class="card-text text-justify"> Desenvolvedora Back-end, utilizei da Linguagem PHP 7.1.0 para efetuar as funcionalidades do CRUD (create, read, update and delete).</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Última atualização 3 minutos atrás</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="./img/user-3.jpeg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Natália Gonçalves Ramos</h5>
            <p class="card-text text-justify"> Participação na Documentação do Software, baseado na Arquitetura de Desenvolvimento 1.0.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Última atualização 3 minutos atrás</small>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center justify-content-center">
      <div id="ger_title">
        <h3 class="text-center">Downloads dos arquivos</h3>
        <h6 class="text-center text-muted"><em>Clique para baixar!</em></h6>
        <hr>
      </div>
    </div>

    <div id="downloads" class="row text-center">
      <div class="col-4" id="pdf">
        <a download="./downloads/enfermaria.pdf"  href="./downloads/enfermaria.pdf" target="blank">
          <img src="./img/pdf.png" width="80" class="img-fluid center-block"><br>
          <span id="download">Arquitetura de Software</span>
        </a>
      </div>
      <div class="col-4" id="pdf">
        <a download="./downloads/requisitosfuncionais.pdf"  href="./downloads/requisitosfuncionais.pdf" target="blank">
          <img src="img/pdf.png" width="80" class="img-fluid center-block"><br>
          <span id="download">Requisitos Funcionais</span>
        </a>
      </div>
      <div class="col-4" id="pdf">
        <a download=""  href="" target="blank">
          <img src="img/pdf.png" width="80" class="img-fluid center-block"><br>
          <span id="download">Manual</span>
        </a>
      </div>
    </div>





    <div>
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