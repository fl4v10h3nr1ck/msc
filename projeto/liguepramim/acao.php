<?php

	header('Content-type: text/html; charset=UTF-8');

	if(!isset($_SESSION))
	session_start();

	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);

	chdir(dirname(__FILE__)); 

	chdir('../');

	include_once getcwd().'/define.php';

	date_default_timezone_set('UTC');
	
	
	include_once LOCAL_COMUNS.'Comuns.class.php';
		
	$comuns = new Comuns();

	$erro = array();

	$_POST['nome'] = 	$comuns->anti_injection($_POST['nome']);
	$_POST['tel'] = 	$comuns->anti_injection($_POST['tel']);
	$_POST['email'] = 	$comuns->anti_injection($_POST['email']);


	if(strlen($_POST['nome']) == 0)
		$erro[] =  "Informe seu nome ou nome da empresa. ";

	if(!$comuns->validaTEL($_POST['tel']))
		$erro[] =  "Informe um número de telefone válido. ";

	if(!$comuns->validaEmail($_POST['email']))
		$erro[] =  "Informe um endereço de E-mail válido. ";


	if(count($erro) > 0){
	
		echo '{"status": false, "erros":'.json_encode($erro).'}';
		return;
	}
	

	include_once LOCAL_BD."BdUtil.class.php";
	include_once RAIZ_SITE_ABS."liguepramim/BeanLiguePraMin.class.php";
	
	$bd = new BdUtil();

	$ligue = new BeanLiguePraMin;
	
	$ligue->nome = 				$_POST['nome'];
	$ligue->telefone = 			$_POST['tel'];
	$ligue->email = 			$_POST['email'];
	$ligue->status = 			"PENDENTE";
	$ligue->data = 				date("d/m/Y H:i");
	
	$ligue->id = $bd->novo($ligue);
			
		if($ligue->id<=0){
					
			echo '{"status":"ERRO", "erro":"Falha na gravação, por favor, tente novamente."}';
			return;
		}
					

	$comuns->enviaEmail(EMAIL_PADRAO, EMAIL_PADRAO, "Nova solicitação de -me ligue- cadastrada no site", "Há uma nova solicitação de -me ligue- cadastrada no site. ".date("d/m/Y H:i"), null, null, null);

	echo '{"status": true}';
?>