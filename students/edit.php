<?php
require_once('cabecalho.php');
require_once('functions.php');
edit();
?>
<!-- PÁGINA DE USUÁRIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">
      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Editar um Estudante</h3>
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
    </div>

    <div class="row align-items-center justify-content-center">

      <form action="edit.php?id=<?php echo $student['id']; ?>" id="interno" role="form" method="post" class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-sm-6 col-md-3 col-lg-3 mb-3">
            <label for="nome">Nome</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-graduation-cap"></i></span>
              </div>
              <input type="text" class="form-control" id="nome" name="student['nome']" aria-describedby="inputGroupPrepend" value="<?php echo $student['nome']; ?>">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 mb-3">
            <label for="email">E-mail</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" id="email" name="student['email']" value="<?php echo $student['email']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
            <label for="cargo">Curso</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-address-card"></i></span>
              </div>
              <input type="text" class="form-control" id="cargo" name="student['curso']" value="<?php echo $student['curso']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-3 mb-3">
            <label for="anoentrada">Ano de Entrada</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-calendar-alt"></i></span>
              </div>
              <input type="date" class="form-control" id="anoentrada" name="student['anoentrada']" value="<?php echo $student['anoentrada']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

        </div> <!-- fim form row -->

        <div class="form-row">
          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <label for="matricula">Matricula</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="text" class="form-control" id="matricula" name="student['matricula']" value="<?php echo $student['matricula']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <label for="phone">Celular</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-phone"></i></span>
              </div>
              <input type="phone" class="form-control" id="phone" name="student['celular']" value="<?php echo $student['celular']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <label for="peso">Peso</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-weight"></i></span>
              </div>
              <input type="number" step="any" class="form-control" id="peso" name="student['peso']" value="<?php echo $student['peso']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <label for="tiposanguineo">Tipo Sanguíneo</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-briefcase-medical"></i></span>
              </div>
              <input type="text" class="form-control" id="tiposanguineo" name="student['tiposanguineo']" value="<?php echo $student['tiposanguineo']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3 col-lg-2 mb-3">
            <label for="altura">Altura</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-text-height"></i></span>
              </div>
              <input type="number" step="any" class="form-control" id="altura" name="student['altura']"  value="<?php echo $student['altura']; ?>" aria-describedby="inputGroupPrepend">
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>
        </div> <!-- fim form row -->
        <button class="btn btn-primary" type="submit">Enviar</button>
      </form>
    </div>


  </div>
</section>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php
require_once("./rodape.php");
require_once("../topo.php");
?>
