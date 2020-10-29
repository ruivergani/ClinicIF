<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$cargo = $_POST["cargo"];

require_once ("bd/bd_usuario.php");
$dados = buscaUsuario($usuario);

require_once ("mensagens.php");
$titulo = 'CADASTRO DE USUÁRIO';
$link = 'index.php';

if($dados != 0){
	$texto = 'Este nome de usuário já existe cadastrado no sistema, por favor cadastre outro nome.';
	erro($titulo,$texto,$link);
}else{
	$dados = cadastraUsuario($usuario,$senha,$email,$cargo);
	if($dados == 1){
		$texto = 'Os dados foram cadastrados no sistema.';
		sucesso($titulo,$texto,$link);
	}else{
		$texto = 'Os dados não foram cadastrados no sistema.';
		erro($titulo,$texto,$link);
	}
}

?>

