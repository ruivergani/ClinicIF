<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Titulo da página"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Gerenciador Hospitalar | ClinicIF</title>
  <link rel="icon" href="../img/faviconmedico2.png">
</head>
<body>

 <!-- Modal -->
  <div class="modal fade" id="delete-modal-product" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">

        <!-- Modal header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modalLabel">Excluir Remédio</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Deseja realmente excluir este remédio?
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <a id="cancel" href="index.php" class="btn btn-outline-danger">Cancelar</a>
          <a id="confirm" class="btn btn-outline-primary">Confirmar</a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>


