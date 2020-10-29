<?php
  require_once('cabecalho.php');
  require_once('functions.php'); 
  view($_GET['id']);
?>
<!-- PÁGINA DE USUÁRIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">

      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Visualizar dados do Funcionário</h3>
      </div>

      <div class="titulo">
        <div class="card">
          <div class="card-body">
            <div class="text-right">
              <a class="btn btn-sm btn-primary light-blue" href=""><i class="fas fa-sync-alt"></i></a>
              <a class="btn btn-sm btn btn-primary light-blue" href="index.php"><i class="fas fa-chevron-circle-left"> Voltar</i></a>
            </div>
          </div>
        </div>
      </div>

      <table class="table table-hover table-striped table-light table-responsive-sm table-responsive-md table-bordered">
        <caption> Busca efetuada com sucesso!</caption>
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Usuário</th>
            <th>E-mail</th>
            <th>Cargo</th>
            <th>Senha</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['usuario']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['cargo']; ?></td>
            <td><?php echo md5($user['senha']); ?></td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>
</section>

<?php
  require_once("./rodape.php");
  require_once("../topo.php");
?>
