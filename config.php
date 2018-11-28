<?php
require 'environment.php';
//configuraçoes dos bancos

$config = array();

if(ENVIRONMENT == 'development'){
	//aqui vai as configs locais
	define("BASE","http://localhost/tarcisio-novo/");
	$config['dbname'] = 'crudoo';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else {
	//aqui vai as configurações do servidor
	define("BASE_URL","http://meusite.com.br/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}