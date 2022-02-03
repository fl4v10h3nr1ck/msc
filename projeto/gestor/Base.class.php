<?php

if(!isset($_SESSION))
session_start();


header('Content-type: text/html; charset=UTF-8');


include_once "define.php";



final class Base{





	public function getHead( $outras_dependencias = ""){
		
	
	echo 
	'<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Flavio Henrique P Sousa">
		
		<title>MSC Soluções - Gestão</title>
		
		<link rel="icon" href="/imgs/favicon.png">
		
		';
			
	$this->getDependencias();
	
	echo $outras_dependencias;

	
	echo '	
	
		</head>
		<body>';
	}



	
	

	public function getDependencias(){
		
	echo 
	
	"
	<link rel='stylesheet' href='".RAIZ_GESTOR."base.css' type='text/css' media='all'>
	
	<link rel='stylesheet' href='".RAIZ_GESTOR."login/login.css' type='text/css' media='all'>

	<script type='text/javascript' src='".RAIZ."libs/jquery_min.js'></script>
	
	<script type='text/javascript' src='".RAIZ_GESTOR."base.js'></script>
	
	<script type='text/javascript' src='".RAIZ_GESTOR."login/login.js'></script>";
	
	}



	
	
	public function getLogin(){
	
	include_once RAIZ_GESTOR_ABSOLUTA.'login/Login.class.php';

	$login = new Login();

	$login->getForm();	
	}
	
	

	
	
	
	
	public function permitido(){
	

		if(array_key_exists("status",$_SESSION) && array_key_exists("usuario",$_SESSION) && $_SESSION['status']===true &&		strlen($_SESSION['usuario'])>0)
			return true;
	
		return false;
	}
	
	
	
}
?>