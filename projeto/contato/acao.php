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

	$_POST['nome'] = 		$comuns->anti_injection($_POST['nome']);
	$_POST['empresa'] =		$comuns->anti_injection($_POST['empresa']);
	$_POST['msg']  = 		$comuns->anti_injection($_POST['msg']);
	$_POST['email'] = 		$comuns->anti_injection($_POST['email']);


	if(strlen($_POST['nome']) == 0)
		$erro[] =  "Informe o seu nome.";

	if(!$comuns->validaEmail($_POST['email']))
		$erro[] = "Informe um endereço de E-mail válido.";

	if(strlen($_POST['msg']) == 0)
	$erro[] =  "Você esqueceu de escrever a mensagem.";


	if(count($erro) > 0){
	
		echo '{"status": false, "erros":'.json_encode($erro).'}';
		return;
	}
	

	include_once LOCAL_BD."BdUtil.class.php";
	include_once RAIZ_SITE_ABS."contato/BeanContato.class.php";
	
	$bd = new BdUtil();

	$contato = new BeanContato;
	
	$contato->nome = 				$_POST['nome'];
	$contato->empresa = 			$_POST['empresa'];
	$contato->msg = 				$_POST['msg'];
	$contato->email = 				$_POST['email'];
	$contato->data = 				date("d/m/Y H:i");
	
	$contato->id = $bd->novo($contato);
			
		if($contato->id<=0){
					
			echo '{"status":"ERRO", "erro":"Falha na gravação, por favor, tente novamente."}';
			return;
		}
					

	$comuns->enviaEmail(EMAIL_PADRAO, EMAIL_PADRAO, "Novo contato", "Há uma nova mensagem de contato cadastrada. ".date("d/m/Y H:i"), null, null, null);

	echo '{"status": true}';
	
?>