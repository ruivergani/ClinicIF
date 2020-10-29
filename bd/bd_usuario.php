<?php
require_once('config.php');

function checaUsuario($usuario, $senha) {
    $conexao = conecta_bd();
	$senhaMd5 = $senha;

    $query = "select *
	from users
	where usuario ='$usuario' and
	senha='$senhaMd5'";

	$resultado = mysqli_query($conexao,$query);
	$dados=mysqli_fetch_assoc($resultado);

	return $dados;
}

function buscaUsuario ($usuario){
	$conexao = conecta_bd();

	$query = "Select * 
	From users 
	Where usuario = '$usuario'";
						  
	$resultado = mysqli_query($conexao, $query);
	$dados = mysqli_num_rows($resultado);

	return $dados;
}

function cadastraUsuario ($usuario,$senha,$email,$cargo){
	$conexao = conecta_bd();
	$query = "Insert Into users (usuario,senha,email,cargo) values('$usuario','$senha','$email','$cargo')";
	
	$resultado = mysqli_query($conexao,$query);
	$dados = mysqli_affected_rows($conexao);
	return $dados;
}

function somaproduto(){
  $conexao = conecta_bd();
  $query = "SELECT SUM(valor_venda) AS ValorTotal FROM products";
  
  $resultado = mysqli_query($conexao,$query);
  $dados=mysqli_num_rows($resultado);
  return $dados;
}


function buscaEmail($email){
	$conexao = conecta_bd();
	$query = "Select *
	From users 
	Where email = '$email'";
	$resultado = mysqli_query($conexao, $query);
	$linha = mysqli_num_rows($resultado);
	$dados = mysqli_fetch_array($resultado);
	if ($linha == 1) {
	$usuario = $dados['usuario'];
	$id = $dados['id'];
	//DETERMINA OS CARACTERES QUE CONTERÃO A SENHA
	$caracteres = "0123456";
	//EMBARALHA OS CARACTERES E PEGA APENAS OS 6 PRIMEIROS
	$senha = substr(str_shuffle($caracteres), 0, 6);
	$query = "Update users
	Set senha = '$senha'
	where id = '$id'
	and usuario = '$usuario'";
	$resultado = mysqli_query($conexao, $query);
	return array($usuario, $senha);
	} else {
		echo $linha;
		return $linha;
	}
}