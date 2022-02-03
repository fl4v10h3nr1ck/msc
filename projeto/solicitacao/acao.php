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

	$_POST['solucoes'] = 			$comuns->anti_injection($_POST['solucoes']);
	$_POST['solicitante'] = 		$comuns->anti_injection($_POST['solicitante']);
	$_POST['empresa'] = 			$comuns->anti_injection($_POST['empresa']);
	$_POST['descricao_empresa']  = 	$comuns->anti_injection($_POST['descricao_empresa']);
	$_POST['outras_info_empresa'] = $comuns->anti_injection($_POST['outras_info_empresa']);
	$_POST['tel']  = 				$comuns->anti_injection($_POST['tel']);
	$_POST['email'] = 				$comuns->anti_injection($_POST['email']);
	$_POST['cidade'] = 				$comuns->anti_injection($_POST['cidade']);
	$_POST['uf']  = 				$comuns->anti_injection($_POST['uf']);
	$_POST['descricao_projeto'] = 	$comuns->anti_injection($_POST['descricao_projeto']);
	$_POST['complementares'] = 		$comuns->anti_injection($_POST['complementares']);

	if(strlen($_POST['solucoes']) == 0)
	$erro[] = "Escolha a solução desejada.";


	if(strlen($_POST['solicitante']) == 0)
	$erro[] = "Informe. por favor, o nome do solicitante.";

	if(!$comuns->validaTEL($_POST['tel']))
	$erro[] = "Informe. por favor, um número de telefone válido.";


	if(!$comuns->validaEmail($_POST['email']))
	$erro[] = "Informe. por favor, um endereço de E-mail válido. ";

	if(strlen($_POST['cidade']) == 0)
	$erro[] = "Informe. por favor, a sua cidade.";

	if(strlen($_POST['uf']) == 0)
	$erro[] = "Informe. por favor, o seu estado (UF).";


	if(strlen($_POST['descricao_projeto']) == 0)
	$erro[] = "Você esqueceu de informar a descrição do projeto.";


	if(count($erro) > 0){
	
	echo '{"status": false, "erros":'.json_encode($erro).'}';
	return;
	}
	

	include_once LOCAL_BD."BdUtil.class.php";
	include_once RAIZ_SITE_ABS."solicitacao/BeanSolicitacao.class.php";
	
	$bd = new BdUtil();

	$sol = new BeanSolicitacao;
	
	$sol->solicitante = 				$_POST['solicitante'];
	$sol->empresa = 					$_POST['empresa'];
	$sol->descricao_empresa = 			$_POST['descricao_empresa'];
	$sol->outras_info_empresa = 		$_POST['outras_info_empresa'];
	$sol->telefone = 					$_POST['tel'];	
	$sol->email = 						$_POST['email'];
	$sol->cidade = 						$_POST['cidade'];
	$sol->uf = 							$_POST['uf'];
	$sol->descricao_projeto = 			$_POST['descricao_projeto'];
	$sol->info_complementares = 		$_POST['complementares'];
	
	$sol->solucoes = 					$_POST['solucoes'];
	$sol->data_pedido = 				date("d/m/Y H:i");
	
	$sol->id = $bd->novo($sol);
			
		if($sol->id<=0){
					
			echo '{"status":"ERRO", "erro":"Falha na gravação, por favor, tente novamente."}';
			return;
		}
					

	$comuns->enviaEmail(EMAIL_PADRAO, EMAIL_PADRAO, "Nova solicitação de serviço", "Há uma nova solicitação de serviço cadastrada. ".date("d/m/Y H:i"), null, null, null);

	echo '{"status": true}';
?>