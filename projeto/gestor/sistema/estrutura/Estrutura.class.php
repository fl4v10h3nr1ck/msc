<?php


include_once RAIZ_ABSOLUTA.'Base.class.php';

include_once RAIZ_ABSOLUTA.'Login.class.php';



final class Estrutura extends Base{

	
	const COD_PRINCIPAL 				= "PCP";
	
	private $login;

	private $status;

	private $opcao;

	
	
	
	function __construct(){
		
		parent::__construct();
		
		$this->login = new Login;
		
		if($this->login->permitirAcesso()){
			
			$this->status = true;
			
			$this->setOpcao();	
		}
		else
			$this->status = false;
	}

	
	
	
	
	
	private function setOpcao(){
		
		if(array_key_exists("op", $_GET)){
			
			switch($_GET["op"]){
			

/*

			
		
			
				case Mod_GeralConexao::COD_MODULO:
				case Mod_GeralConexao::COD_CAD_EMPRESAS:
				case Mod_GeralConexao::COD_CAD_FAZENDAS:
				case Mod_GeralConexao::COD_CAD_USUARIOS:
				case Mod_GeralConexao::COD_CAD_GRUPOS:
				case Mod_GeralConexao::COD_CAD_DOCS:
				case Mod_GeralConexao::COD_CONFIG:
				
				$this->opcao =  $this->mod_geral->getOpcao();
				$this->setIndicadores(array(Mod_GeralConexao::COD_MODULO, Mod_GeralConexao::NOME_MODULO), $this->mod_geral->getTitulo());
				break;
												
									
	

				case Mod_CampoConexao::COD_MODULO:
				case Mod_CampoConexao::COD_CAD_QUADRAS:
				case Mod_CampoConexao::COD_CAD_PRAGAS:
				case Mod_CampoConexao::COD_CAD_PRODUTOS:
				case Mod_CampoConexao::COD_INSPECAO:
				case Mod_CampoConexao::COD_RECOMENDACAO:
				case Mod_CampoConexao::COD_APLICACAO:
				case Mod_CampoConexao::COD_APLICACAO_SERV:
				case Mod_CampoConexao::COD_ESTAT_COLHEITA:
				case Mod_CampoConexao::COD_CONFIG:
				
				$this->opcao =  $this->mod_campo->getOpcao();
				$this->setIndicadores(array(Mod_CampoConexao::COD_MODULO, Mod_CampoConexao::NOME_MODULO), $this->mod_campo->getTitulo());
				break;
		
						
								
				
				case Mod_PatrimonioConexao::COD_MODULO:
				case Mod_PatrimonioConexao::COD_CAD_EQUIPAMENTOS:
				case Mod_PatrimonioConexao::COD_CONFIG:
				
				$this->opcao =  $this->mod_patrimonio->getOpcao();
				$this->setIndicadores(array(Mod_PatrimonioConexao::COD_MODULO, Mod_PatrimonioConexao::NOME_MODULO), $this->mod_patrimonio->getTitulo());
				break;
				

	
			
				case Mod_MovimentoConexao::COD_MODULO:
				case Mod_MovimentoConexao::COD_CAD_CLIENTES:
				case Mod_MovimentoConexao::COD_CAD_PRESTADORES:
				case Mod_MovimentoConexao::COD_CAD_FORNECEDORES:
				case Mod_MovimentoConexao::COD_ROMANEIO_EMBARQUE:
				case Mod_MovimentoConexao::COD_ROMANEIO_VENDA:
				case Mod_MovimentoConexao::COD_ESTOQUE:
				case Mod_MovimentoConexao::COD_CONFIG:
				case Mod_MovimentoConexao::COD_COMPRAS:
				
				$this->opcao =  $this->mod_movimento->getOpcao();
				$this->setIndicadores(array(Mod_MovimentoConexao::COD_MODULO, Mod_MovimentoConexao::NOME_MODULO), $this->mod_movimento->getTitulo());
				break;
			
	
	
				
				case Mod_FrotaConexao::COD_MODULO:							
				case Mod_FrotaConexao::COD_CAD_VEIC_EXTERNOS:
				case Mod_FrotaConexao::COD_VEICULOS:
				case Mod_FrotaConexao::COD_VEIC_TERCEIROS:
				case Mod_FrotaConexao::COD_TANQUES:
				case Mod_FrotaConexao::COD_CONFIG:
				
				$this->opcao =  $this->mod_frota->getOpcao();
				$this->setIndicadores(array(Mod_FrotaConexao::COD_MODULO, Mod_FrotaConexao::NOME_MODULO), $this->mod_frota->getTitulo());
				break;

	
	
	
				case Mod_CriacaoConexao::COD_MODULO:
				case Mod_CriacaoConexao::COD_CAD_LOCAIS:
				case Mod_CriacaoConexao::COD_CAD_PRODUTOS:
				case Mod_CriacaoConexao::COD_PESAGEM:
				case Mod_CriacaoConexao::COD_DIETA:
				case Mod_CriacaoConexao::COD_ENTRADA:
				case Mod_CriacaoConexao::COD_SAIDA:
				case Mod_CriacaoConexao::COD_CONFIG:
				
				$this->opcao =  $this->mod_criacao->getOpcao();
				$this->setIndicadores(array(Mod_CriacaoConexao::COD_MODULO, Mod_CriacaoConexao::NOME_MODULO), $this->mod_criacao->getTitulo());
				break;
	*/
	
			}
		}
	}
	
	
	
	

	

	public function dependencias(){
		
		echo "
		
		<link rel='stylesheet' type='text/css' href='".RAIZ."sistema/estrutura/estrutura.css?v=".rand(1, 999)."'>
		
		<script type='text/javascript' src='".RAIZ."libs/jquery-3.1.1.min.js'></script>
		
		<script type='text/javascript' src='".RAIZ."sistema/estrutura/estrutura.js?v=".rand(1, 999)."'></script>
		
		<script type='text/javascript' src='".RAIZ."libs/mascaras.js?v=".rand(1, 999)."'></script>";	
		
		
		$this->login ->dependencias();
		
		if(is_object($this->opcao))
			$this->opcao ->dependencias();
		
	}


	
	
	
	
	public function cabecalho(){
	
		$cabecalho = '

		<meta charset="utf-8">
		<meta http-equiv="content-language" content="pt-br">
		<meta name="author" content="Eng. Flavio Henrique P Sousa">
		<meta name="reply-to" content="contato@mscsolucoes.com.br">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="viewport" content="width=device-width;initial-scale=1.0,user-scalable=no,maximum-scale=1">
		
		<title>MSC Solução Gestão</title>';
		
		echo $cabecalho;
	}
	
	

	
	
	
	
	public function conteudo(){
	
		echo "<input type='hidden' id='PATH_SMP' value='".RAIZ."'>";

		if($this->status){
	
			if(is_object($this->opcao))	
				$this->opcao->conteudo();
			else	
				echo  "
					<div align='center'>
						ok
					</div>";
		}
		else
			$this->login->logar();
			
	}
	
	
	
	
	
}	
		
?>