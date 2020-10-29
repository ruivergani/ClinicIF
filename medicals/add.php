<?php
require_once('cabecalho.php');
require_once('functions.php');
add();
?>
<!-- PÁGINA DE CONSULTA -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">
      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Cadastrar uma Consulta</h3>
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
            <label for="nome">Aluno</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user-graduate"></i></span>
              </div>
              <select class="custom-select" name="medical['nomeAluno']" id="nome" aria-describedby="inputGroupPrepend" required>
                <option value="0" disabled selected>Selecionar...</option>
                <?php
                  $students = listaStudents();
                  foreach ($students as $medical) :
                    $KNome = KNome($medical["id"]);
                    echo '<option value=' . $medical["id"] . '>' . $KNome[0] . '</option>';
                  endforeach
                ?>
              </select>
              <div class="invalid-feedback">
                Por favor escolha um nome de Aluno.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="remedio">Remédio</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-capsules"></i></span>
              </div>
              <select class="custom-select" name="medical['nomeRemedio']" id="remedio" aria-describedby="inputGroupPrepend" required>
                <option value="0" disabled selected>Selecionar...</option>
                <?php
                  $products = listaProdutos();
                  $i = -1;
                  foreach ($products as $medical) :
                    $i++;
                  echo '<option value=' . $products[$i][1] . '>' . $products[$i][0] . '</option>';
                  endforeach
                ?>
              </select>
              <div class="invalid-feedback">
                Por favor escolha um Remédio.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="usuario">Funcionário</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-address-book"></i></span>
              </div>
              <select class="custom-select" name="medical['nomeUser']" id="usuario" aria-describedby="inputGroupPrepend" required>
                <option value="0" disabled selected>Selecionar...</option>
                <?php
                  $users = listaFuncionarios();
                  $i = -1;
                  foreach ($users as $medical) :
                    $i++;
                  echo '<option value=' . $users[$i][1] . '>' . $users[$i][0] . '</option>';
                  endforeach
                ?>
              </select>
              <div class="invalid-feedback">
                Por favor escolha um Remédio.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="remedio">Horário</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-clock"></i></span>
              </div>
              <input type="date" class="form-control" id="horario" name="medical['horario']" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor escolha um horário.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>
        </div> <!-- fim form row -->

        <div class="form-row">
          <div class="col-12">
              <div class="form-group">
                <label for="relatorio">Relatório</label>
                <textarea class="form-control" name="medical['relatorio']" id="relatorio" rows="3" required></textarea>
              </div>
              <div class="invalid-feedback">
                Por favor digite uma relatório.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
          </div>
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
