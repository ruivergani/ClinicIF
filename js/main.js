/**
 * Passa os dados do produto para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Estudante: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados do produto para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-product').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Produto: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados do usuário para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-user').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Usuário: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados da Consulta para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-medical').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Consulta: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
/**
 * Passa os dados da Venda para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-medical').on('show.bs.modal', function (event) {

  var button = $(event.relatedTarget);
  var id = button.data('customer');

  var modal = $(this);
  modal.find('.modal-title').text('Excluir Consulta: ' + id);
  modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})