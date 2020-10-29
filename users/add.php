<?php
  require_once('cabecalho.php');
  require_once('functions.php');
  add();
?>
<!-- PÁGINA DE USUÁRIO -->
<section id="servico">
  <div class="container">
    <div class="row align-items-center justify-content-center justify-content-md-end">
      <div class="col align-self-center" id="ger_title">
          <h3 class="text-center">Cadastrar um Funcionário</h3>
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
            <label for="nome">Nome de Usuário</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="text" class="form-control" id="nome" name="user['usuario']" placeholder="Alice" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor escolha um nome de usuário.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-5 col-lg-4 mb-3">
            <label for="email">E-mail</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="email" class="form-control" id="email" name="user['email']" placeholder="exemplo@gmail.com" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor digite um e-mail correto.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
            <label for="cargo">Cargo do Funcionário</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="far fa-address-card"></i></span>
              </div>
              <input type="text" class="form-control" id="cargo" name="user['cargo']"  placeholder="Médica" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Por favor digite um cargo.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>
        </div> <!-- fim form row -->

        <div class="form-row">

          <div class="col-sm-6 col-md-4 mb-3">
            <label for="senha">Senha</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-unlock-alt"></i></span>
              </div>
              <input type="password" minlength="8" class="form-control" name="user['senha']"  id="senha" placeholder="Senha" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Mínimo de 8 digitos.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 mb-3">
            <label for="conf_senha">Confirmar Senha</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-unlock-alt"></i></span>
              </div>
              <input type="password" name="conf_senha" minlength="8" name="conf_senha" oninput="validaSenha(this)" class="form-control" id="conf_senha" placeholder="Confirmar Senha" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                As senhas estão diferentes.
              </div>
              <div class="valid-feedback">
                Parece bom!
              </div>
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

<!-- script utilizado para validar campo senha e confirma senha se são iguais-->
<script type="text/javascript">
    function validaSenha (input){ 
        if (input.value != document.getElementById('senha').value) {
        input.setCustomValidity('Repita a senha corretamente');
        } else {
        input.setCustomValidity('');
        }
    }
</script>

<?php
  require_once("./rodape.php");
  require_once("../topo.php");
?>
