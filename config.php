<?php

/** O nome do banco de dados*/
define('DB_NAME', 'clinic_bd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/ClinicIF/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

function conecta_bd(){
	//configuracao do banco de dados

	//local que está rodando o php
	$servidor = "localhost";

	//Nome de usuário que tem acesso
	$usuario_bd ="root";

	//Senha do usuário, que tem acesso ao banco de dados
	$senha_bd ="";

	//Banco de dados que deseja estabelecer a conexão
	$banco ="clinic_bd";

	//Abre uma conexão com o servisor MySQL 
	$conexao = mysqli_connect($servidor, $usuario_bd, $senha_bd, $banco);
   
	//Com a variável $con definida, podemos fazer um teste usando o IF, se der falso, a conexão com o servidor falhou.
	if(mysqli_connect_errno($conexao))
	{
		echo "Erro ao conectar ao banco de dados!";
		die();
	}
	return $conexao;
}

?>