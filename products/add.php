<?php
require_once('cabecalho.php');
require_once('functions.php');
add();
?>
<!-- PÁGINA DE REMÉDIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">
      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Cadastrar um Remédio</h3>
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

      <form action="add.php" id="interno" role="form" method="post" class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-sm-6 col-md-3 col-lg-4 mb-3">
            <label for="nome">Nome</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-pills"></i></span>
              </div>
              <input type="text" class="form-control" id="nome" name="product['nome']" placeholder="Dorflex" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor escolha um nome de remédio.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="fornecedor">Fornecedor</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-truck"></i></span>
              </div>
              <input type="text" class="form-control" id="fornecedor" name="product['fornecedor']" placeholder="Neo Química" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor escolha um fornecedor.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
            <label for="datavalidade">Data de Validade</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-clock"></i></span>
              </div>
              <input type="date" class="form-control" id="datavalidade" name="product['datavalidade']" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor digite uma data.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>
        </div> <!-- fim form row -->

        <div class="form-row">
          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="dose">Dose</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-tablets"></i></span>
              </div>
              <input type="text" class="form-control" id="dose" name="product['dose']" placeholder="10ml / 1 comprimido" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor digite uma dose.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>
        </div>

        <div class="form-row" id="range">
          <label for="risco">Risco</label>
          <input type="range" class="custom-range" min="0" max="5" step="0.5" name="product['risco']"  id="risco" required>
        </div>

        <div class="form-group">
          <div class="custom-control custom-checkbox form-check">
            <input class="custom-control-input form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="custom-control-label form-check-label" for="invalidCheck">
              Concordar com termos e condições
            </label>
            <div class="invalid-feedback">
              Você deve concordar antes de enviar.
            </div>
          </div>
        </div>

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
