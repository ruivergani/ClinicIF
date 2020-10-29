<?php
require_once('../config.php');
require_once(DBAPI);

$medicals = null;
$medical = null;

/**
 *  Listagem de Consulta
 */
function index() {
  global $medicals;
  $medicals = find_all('medicals');
}

/**
 *  Cadastro de Consulta
 */
function add() {

  if (!empty($_POST['medical'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $medical = $_POST['medical'];
    $medical['modified'] = $medical['created'] = $today->format("Y-m-d H:i:s");
    
    save('medicals', $medical);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao de Consulta
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['medical'])) {

      $medical = $_POST['medical'];
      $medical['modified'] = $now->format("Y-m-d H:i:s");

      update('medicals', $id, $medical);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $medical;
      $medical = find('medicals', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de um Consulta
 */
function view($id = null) {
  global $medical;
  $medical = find('medicals', $id);
}

/**
 *  Exclusão de um Consulta
 */
function delete($id = null) {

  global $medical;
  $medical = remove('medicals', $id);

  header('location: index.php'); 
}


function KNome($id = null){
  $conexao = conecta_bd();

  $query = "Select nome 
        From students 
        where id  = '$id'";

  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function KP($id = null){
  $conexao = conecta_bd();

  $query = "Select nome
        From products 
        where id  = '$id'";

  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function KV($id = null){
  $conexao = conecta_bd();

  $query = "Select usuario
        From users 
        where id  = '$id'";

  $resultado = mysqli_query($conexao, $query);
  $dados = mysqli_fetch_array($resultado);

  return $dados;
}

function listaStudents()
{
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select * 
        From students 
        order by nome";

  $resultado = mysqli_query($conexao, $query);

  while ($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}

function listaProdutos()
{
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select nome,id 
        From products 
        order by nome ";

  $resultado = mysqli_query($conexao, $query);

  while ($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}

function listaFuncionarios()
{
  $conexao = conecta_bd();
  $customers = array();

  $query = "Select usuario,id 
        From users 
        order by usuario ";

  $resultado = mysqli_query($conexao, $query);

  while ($dados = mysqli_fetch_array($resultado)) {
    array_push($customers, $dados);
  }

  return $customers;
}
?>