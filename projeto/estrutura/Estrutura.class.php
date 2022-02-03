<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__)); 

chdir('../');

include_once getcwd().'/Base.class.php';


final class Estrutura extends Base{


private $opcao;


	function __construct(){
		
		if(array_key_exists("op", $_GET)){
			
			switch($_GET["op"]){
				
				case "PCP":
					$this->principal();
					break;
			
				case "ITT":
					include_once RAIZ_SITE_ABS."institucional/Institucional.class.php";
					$this->opcao = new Institucional();
					break;
					case "SVC":
						include_once RAIZ_SITE_ABS."servicos/Servicos.class.php";
						$this->opcao = new Servicos();
						break;	
						case "SOL":
							include_once RAIZ_SITE_ABS."solicitacao/Solicitacao.class.php";
							$this->opcao = new Solicitacao();
							break;	
							case "CTT":
								include_once RAIZ_SITE_ABS."contato/Contato.class.php";
								$this->opcao = new Contato();
								break;	
								case "PRT":
									include_once RAIZ_SITE_ABS."portfolio/Portfolio.class.php";
									$this->opcao = new Portfolio();
									break;								
									default:
										$this->principal();
			}
		}
		else
			$this->principal();
	}

	

	

	private function principal(){
		
		include_once RAIZ_SITE_ABS."home/Home.class.php";
		$this->opcao = new Home();
	}
	


	
	
	public function cabecalho(){
	
	echo '
		<meta charset="utf-8">
		<meta http-equiv="content-language" content="pt-br">
		<meta name="author" content="Eng. Flavio Henrique P Sousa">
		<meta name="reply-to" content="contato@mscsolucoes.com.br">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width;initial-scale=1.0,user-scalable=no,maximum-scale=1">
		<meta name="keywords" content="msc, soluções, empresa, tecnologia, ti, programação, sistemas, softwares, site, loja virtual, redes, fábrica, programas, desenvolvimento, infraestrutura, serviços, orçamento, tecnologia da informação, computação, sistema web, intranet">
		<meta name="description" content="Empresa que presta serviços em T.I. focados no desenvolvimento, gerenciamento, manutenção, adequação e atualização de softwares. Também ajudamos nossos clientes com toda a infraestrutura necessário à operação dos sistemas desenvolvidos.">
		<title>MSC Soluções</title>
		<link rel="shortcut icon" sizes="32x32" href="'.LOCAL_IMGS.'favicon.png" type="image/x-icon">';		
	}


	
	
	
	
	public function dependencias(){
	
		echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."estrutura/estrutura.css' type='text/css' media='all'>
		<script type='text/javascript' src='".LOCAL_JS."jquery-3.1.1.min.js'></script>
		<script type='text/javascript' src='".LOCAL_JS."mascaras.js'></script>
		<script type='text/javascript' src='".RAIZ_SITE_SMP."estrutura/estrutura.js'></script>";
		
		if(is_object($this->opcao))
			$this->opcao ->dependencias();	
		
	}
	
	
	
	
	
	
	
	public function getMenuPrincipal(){
	
	echo "
			<input type='hidden' value='".RAIZ_SITE_SMP."' id='PATH'>
			<div id='menu_horizontal' align='center'>
				<table width='100%'>
					<tr>
						<td width='15%' align='center'>
						<a href='".RAIZ_SITE_SMP."'>
						<img src='".LOCAL_IMGS."logo.png' id='logo'>
						</a>
						</td>
						<td width='70%' align='center'>
							<table>
								<tr><td class='item_menu_horizontal' align='center'>
								<a href='".RAIZ_SITE_SMP."'>Home</a>
								</td><td class='item_menu_horizontal' align='center'>
								<a href='".RAIZ_SITE_SMP."index.php?op=ITT'>Quem Somos</a>
								</td><td class='item_menu_horizontal' align='center'>
								<a href='".RAIZ_SITE_SMP."index.php?op=SVC'>Serviços</a>
								</td><td class='item_menu_horizontal' align='center'>
								<a href='".RAIZ_SITE_SMP."index.php?op=SOL'>Solicitação</a>
								</td><td class='item_menu_horizontal' align='center'>
								<a href='".RAIZ_SITE_SMP."index.php?op=CTT'>Contato</a>
								</td></tr>
							</table>
						</td>
						<td width='15%' align='right'>
							<a href='https://twitter.com/mscsolucoes'>
							<img src='".LOCAL_IMGS."icon_twitter.png' class='icons'>
							</a>
							<a href='https://www.facebook.com/mscsolucoes'>
							<img src='".LOCAL_IMGS."icon_facebook.png' class='icons'>
							</a>	
						</td>
					</tr>
				</table>
			</div>";
	
	}
	
	
	
	
	
	
	public function conteudo(){
	
		if(is_object($this->opcao))	
			$this->opcao->conteudo();		
	}
	
	
	
	
	
	
	public function getRodape(){
	
	echo "
				<div class='conteudo'>
					<div class='area_total' align='center' id='rodape'>
						<div class='container'>
							<div class='div_rodape' align='left' id='div_rodape_links'>
							<img src='".LOCAL_IMGS."icon_menu.png' height='26px'>
							<hr style='color:back;width:100%'>
								<ul>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=PCP'>Página Principal</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=ITT'>Quem Somos</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=SOL'>Solicitação</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=ITT'>Portfólio</a></li>
								</ul>
							<br>	
							<img src='".LOCAL_IMGS."icon_links.png' height='20px'>	
							<hr style='color:back;width:100%'>
								<ul>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=WEB'>Desenvolvimento WEB</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=SOFT'>Fábrica de Softwares</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=INFRA'>Infraestrutura em T.I.</a></li>
									<li><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=TREINA'>Treinamentos</a></li>
								</ul>
							</div>
							<div class='div_rodape' align='left' id='div_rodape_contatos'>
							<img src='".LOCAL_IMGS."icon_email.png' height='26px'>
							<hr style='color:back;width:100%'>
							<p align='center'>
							E-mail:<br>
							contato@mscsolucoes.com.br<br><br>
							Fones:<br>
							<img src='".LOCAL_IMGS."icon_whatsapp.png' style='vertical-align:middle;height:30px;margin-right:10px'>(91) 99293-4270 (vivo)<br><br>
							<span style='margin-left:20px'>(91) 98959-1697 (tim)</span><br><br>
							Escritório:<br>
							Rua Treze, 92, Val-de-Cães | Belém - PA<br><br>
							<!-- Já é cliente? Acesse:<br>
							<a href='".RAIZ_SITE_SMP."util/area_do_cliente/'>Área do Cliente</a> -->
							</p>
							</div>
							<div class='div_rodape' align='left' id='div_rodape_form'>
							<img src='".LOCAL_IMGS."icon_contato.png' height='25px'>
							<hr style='color:back;width:100%'>
							<p style='font-size:14px'>Deixe seus contatos, nós ligamos pra você!</p>
								<div id='rodape_form_contato'>
									<p align='left'>
									Nome/Empresa:<span class='requerido'>*</span><br>
									<input type='text' value='' style='width:96%' id='cad_tel_nome' maxlength='40' ><br><br>
									Fone:<span class='requerido'>*</span><br>
									<input type='text' value='(XX) XXXXX-XXXX' maxlength='15' style='width:50%' id='cad_tel_num' onchange='javascript:mascara(this, formatarTEL);'><br><br>
									E-mail:<span class='requerido'>*</span><br>
									<input type='text' value='' style='width:96%' id='cad_tel_email'>
									</p>
									<p align='center'><br><button style='height:25px;width:32%' id='bt_cad_tel'>Cadastrar</button></p>
								</div>	
							</div>
							<div style='clear:both'></div>
						</div>
					<p id='copyright'>Copyright ".date("Y")." <span style='color:#F3FF77'>MSC Solucções</span>. Todos os Direitos Reservados.</p>
					</div>
				</div>";
			
	}

	
	
}
?>