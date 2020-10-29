<?php
require_once('cabecalho.php');
require_once('functions.php');
view($_GET['id']);
?>
<!-- PÁGINA DE REMÉDIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">

      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Visualizar dados do Remédio</h3>
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
        <caption> Busca efetuada com sucesso! (Risco de 0 à 5)</caption>
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Nome</th>
            <th>Fornecedor</th>
            <th>Dose (ml)</th>
            <th>Data de Validade</th>
            <th>Risco*</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['nome']; ?></td>
            <td><?php echo $product['fornecedor']; ?></td>
            <td><?php echo $product['dose']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($product['datavalidade'])); ?></td>
            <td>
            <?php 
              $level = $product['risco'];
              if ($level < 2.5) {
                echo "Baixo";
              }
              if ($level > 2.5) {
                echo "Alto";
              }
              if ($level == 2.5) {
                echo "Médio";
              }
            ?>
            </td>
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
