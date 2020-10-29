<?php
require_once('cabecalho.php');
require_once('functions.php');
view($_GET['id']);
?>
<!-- PÁGINA DA CONSULTA -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">

      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Visualizar dados da Consulta</h3>
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
      <caption>Busca efetuada com sucesso!</caption>
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Nome do Estudante</th>
            <th>Remédio</th>
            <th>Funcionário</th>
            <th>Horário</th>
            <th>Relatório</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
            <td><?php echo $medical['id']; ?></td>
            <td><?php $KNome = KNome($medical['nomeAluno']); echo $KNome[0]; ?></td>
            <td><?php $KP = KP($medical['nomeRemedio']); echo $KP[0]; ?></td>
            <td><?php $KV = KV($medical['nomeUser']); echo $KV[0]; ?></td>
            <td><?php echo date('d/m/Y', strtotime($medical['horario'])); ?></td>
            <td><?php echo $medical['relatorio']; ?></td>
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
