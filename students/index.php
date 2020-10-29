<?php
  require_once('cabecalho.php');
  require_once('functions.php');
  require_once('modal.php');
  index();
?>
<!-- PÁGINA DE USUÁRIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">

      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Gerenciamento de Estudantes</h3>
      </div>

      <div class="titulo">
        <div class="card">
          <div class="card-body">
            <div class="text-right">
              <a class="btn btn-sm btn-primary light-blue" href="add.php"><i class="fas fa-user-graduate"></i></a>
              <a class="btn btn-sm btn-primary light-blue" href="index.php"><i class="fas fa-sync-alt"></i></a>
              <a class="btn btn-sm btn btn-primary light-blue" href="../principal.php"><i class="fas fa-chevron-circle-left"></i></a>
            </div>
          </div>
        </div>
      </div>

      <?php if (!empty($_SESSION['message'])) : ?>
      <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible col-12 text-center align-self-center" role="alert" id="message">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <span data-html="true"><strong><?php echo $_SESSION['message']; ?></strong></span>
      </div>
      <?php endif;
      unset($_SESSION['message']);
      ?>
      <script>
        setTimeout(function(){ 
        $('#message').remove();   
        }, 4500);   
      </script>

      <table class="table table-hover table-striped table-light table-responsive-sm table-responsive-md table-bordered">
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Nome</th>
            <th>Matricula</th>
            <th>Tipo Sanguíneo</th>
            <th>Curso</th>
            <th>Série</th>
            <th>Funcionalidades</th>
          </tr>
        </thead>

        <tbody>
          <?php if ($students) : ?>
          <?php foreach ($students as $student) : ?>
          <tr class="text-center">
            <td><?php echo $student['id']; ?></td>
            <td class=""><?php echo $student['nome']; ?></td>
            <td class=""><?php echo $student['matricula']; ?></td>
            <td class=""><?php echo $student['tiposanguineo']; ?></td>
            <td class=""><?php echo $student['curso']; ?></td>
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

              if ($calc == 1){
                echo "Primeiro Ano";
              }
              if ($calc == 2) {
                echo "Segundo Ano";
              }
              if ($calc == 0) {
                echo "Terceiro Ano";
              }
              ?>   
            </td>
            <td class="actions">
            <a href="view.php?id=<?php echo $student['id']; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
            <a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i></a>
            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $student['id']; ?>"><i class="fas fa-user-minus"></i></a>
            </td>
          </tr>

          <?php endforeach; ?>
          <?php else : ?>

          <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
          </tr>

          <?php endif; ?>
        </tbody>
      </table>

      
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo BASEURL; ?>js/jquery-1.11.0.min.js"><\/script>')</script>
      <script src="<?php echo BASEURL; ?>js/bootstrap.min.js"></script> -->
      <script src="<?php echo BASEURL; ?>js/main.js"></script>

    </div>
  </div>
</section>
<?php
require_once("./rodape.php");
require_once("../topo.php");
?> 
