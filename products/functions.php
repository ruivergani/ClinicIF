<?php
require_once('../config.php');
require_once(DBAPI);

$product = null;
$products = null;

/**
 *  Listagem de Produtos
 */
function index() {
	global $products;
	$products = find_all('products');
}

/**
 *  Cadastro de Produto
 */
function add() {

  if (!empty($_POST['product'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $product = $_POST['product'];
    $product['modified'] = $product['created'] = $today->format("Y-m-d H:i:s");
    
    save('products', $product);
     echo "<script>location.href='index.php'</script>";

  }
}

/**
 *  Atualizacao/Edicao de Produto
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['product'])) {

      $product = $_POST['product'];
      $product['modified'] = $now->format("Y-m-d H:i:s");

      update('products', $id, $product);
      echo "<script>location.href='index.php'</script>";
    } else {

      global $product;
      $product = find('products', $id);
    } 
  } else {
     echo "<script>location.href='index.php'</script>";
  }
}

/**
 *  Visualização de um Produto
 */
function view($id = null) {
  global $product;
  $product = find('products', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $product;
  $product = remove('products', $id);

   header('location: index.php'); 
}


?>