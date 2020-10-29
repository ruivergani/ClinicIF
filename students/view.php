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
          <h3 class="text-center">Visualizar dados do Estudante</h3>
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
            <th>Nome</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Matricula</th>
            <th>Tipo Sanguíneo</th>
            <th>Altura</th>
            <th>Peso (Kg)</th>
            <th>Curso</th>
            <th>Série</th>
          </tr>
        </thead>

        <tbody>
          <tr class="text-center">
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['nome']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['celular']; ?></td>
            <td><?php echo $student['matricula']; ?></td>
            <td><?php echo $student['tiposanguineo']; ?></td>
            <td><?php echo $student['altura']; ?></td>
            <td><?php echo $student['peso']; ?></td>
            <td><?php echo $student['curso']; ?></td>
            <td class="">
              <?php
              $data = $student['anoentrada'];
              // separando yyyy, mm, ddd
              list($ano, $mes, $dia) = explode('-', $data);
              // data atual
              $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
              // Descobre a unix timestamp da data de entrada
              $anoentrada = mktime(0, 0, 0, $mes, $dia, $ano);
              // cálculo
              $calc = floor((((($hoje - $anoentrada) / 60) / 60) / 24) / 365.25);

              if ($calc == 1) {
                echo "Primeiro Ano";
              }
              if ($calc == 2) {
                echo "Segundo Ano";
              }
              if ($calc == 3) {
                echo "Terceiro Ano";
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
