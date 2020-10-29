<?php
require_once('../config.php');
require_once(DBAPI);

$students = null;
$student = null;

/**
 *  Listagem de Estudantes
 */
function index() {
	global $students;
	$students = find_all('students');
}

/**
 *  Cadastro de Estudantes
 */
function add() {

  if (!empty($_POST['student'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $student = $_POST['student'];
    $student['modified'] = $student['created'] = $today->format("Y-m-d H:i:s");
    
    save('students', $student);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao de Estudante
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['student'])) {

      $student = $_POST['student'];
      $student['modified'] = $now->format("Y-m-d H:i:s");

      update('students', $id, $student);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $student;
      $student = find('students', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de um Estudante
 */
function view($id = null) {
  global $student;
  $student = find('students', $id);
}

/**
 *  Exclusão de um Estudante
 */
function delete($id = null) {

  global $student;
  $student = remove('students', $id);

  header('location: index.php'); 
}
?>