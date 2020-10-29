<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Titulo da página"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Gerenciador Hospitalar | ClinicIF</title>
  <link rel="icon" href="img/faviconmedico2.png">
  <!-- Bootstrap -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center"><?= $titulo ?></h5>
        </div>
        <div class="modal-body">
          <p> <?= $texto ?></p>
        </div>
        <div class="modal-footer">
          <?php if (isset($link_cancel)) { ?>
            <a href="<?= $link_cancel ?>"><button type="button" class="btn btn-danger">Cancelar</button></a>
          <?php 
        } ?>
          <a href="<?= $link ?>"><button type="button" class="btn btn-primary">Confirmar</button></a>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myModal').modal('show');
    });
  </script>
</body>
</html>


