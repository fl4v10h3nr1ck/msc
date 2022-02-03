<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__));

chdir('../');

include_once getcwd().'/Base.class.php';


final class Solicitacao extends Base{



	
	
	public function dependencias(){
	
	echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."solicitacao/solicitacao.css' type='text/css' media='all'>
		<script type='text/javascript' src='".RAIZ_SITE_SMP."solicitacao/solicitacao.js'></script>";
	}



	
	
	public function conteudo(){

		$form =  "	
		<div class='conteudo'>
		<br><br><br><br>
			<p class='titulo'><b>Orçamento</b><br><hr style='width:200px'></p>
			<div class='div_area' align='left'>
				<p class='titulo'><img src='".LOCAL_IMGS."icon_ok.png' class='mark'>Como podemos ajudá-lo?</p>
				<input type='checkbox' value='WEB' name='solucao'>&nbsp;Websites, sistemas WEB, lojas virtuais, intranets, etc.<br>
				<input type='checkbox' value='SOFTWARES' name='solucao'>&nbsp;Fábrica de softwares (desenvolvimento de sistemas, aplicativos para smartphones, etc.).<br>
				<input type='checkbox' value='INFRAESTRUTURA' name='solucao'>&nbsp;Infraestrutura em T.I. (redes, equipamentos, manutenção de equipamentos, helpdesk, etc.).<br>
				<input type='checkbox' value='TREINAMENTOS' name='solucao'>&nbsp;Treinamentos (cursos de programação/utilização para equipes).<br>
			</div>
			<div class='div_area' align='left'>
				<p class='titulo'><img src='".LOCAL_IMGS."icon_ok.png' class='mark'>Fale-nos um pouco sobre você?</p>
				Nome do Solicitante:<span class='requerido'>*</span><br>
				<input type='text' value='' id='solicitante' maxlength='150' style='width:60%'>
				<br>Nome da Empresa:<br>
				<input type='text' value='' id='empresa' maxlength='150' style='width:60%'>
				<br>Faça uma breve descrição da sua empresa:<br>
				<textarea id='descricao_empresa' style='width:60%;height:80px' maxlength='450' ></textarea>
				<br>Qual é seu público alvo, produtos e serviços?<br>
				<textarea id='outras_info_empresa' style='width:60%;height:80px' maxlength='450' ></textarea>
				<br>Telefone:<span class='requerido'>*</span><br>
				<input type='text' value='(xx) xxxxx-xxxx' maxlength='15' style='width:20%' id='tel' onchange='javascript:mascara(this, formatarTEL)'><br><br>
				E-mail:<span class='requerido'>*</span><br>
				<input type='text' value='' id='email' maxlength='150' style='width:60%'><br>
				<table width='100%'>
					<tr>
						<td width='width:60%' align='left'>
						Cidade:<span class='requerido'>*</span><br>
						<input type='text' value='' id='cidade' maxlength='150' style='width:98%'>
						</td><td width='width:40%' align='left'>
						Estado (UF):<span class='requerido'>*</span><br>
							<select id='uf' style='width:60%'>";
					
		foreach( array('', 'AC', 'AL', 'AP', 'AM',  'BA', 'CE',  'DF',  'ES',  'GO',  'MA',  'MT',  'MS',  'MG',   'PA', 'PB',  'PR',  'PE',  'RJ',  'RJ',  'RN',  'RS', 'RO',  'RR',  'SC',  'SP',  'SE',  'TO') as $value)
			$form .= "			<option value='".$value."'>".(strcmp($value, "") == 0? "UF":$value)."</option>";
					
					
		$form .= "			</select>
						</td>
					</tr>
				</table>
			</div>
			<div class='div_area' align='left'>
				<p class='titulo'><img src='".LOCAL_IMGS."icon_ok.png' class='mark'>Agora sobre o projeto?</p>
				Descreva suas necessidades ou ideias de projeto:<span class='requerido'>*</span><br>
				<textarea id='descricao_projeto' style='width:60%;height:200px' maxlength='450' ></textarea><br>
				Informações complementares:<br>
				<input type='text' value='' id='complementares' maxlength='200' style='width:60%'>
			</div>
			<div class='div_area' align='center'><br>São essas as informações que precisamos neste momento. Em breve lhe enviaremos uma proposta comercial como todos os dados necessários e entraremos em contato para conversarmos sobre os detalhes do projeto.</div>
			<div class='div_area' align='center'><br><button id='bt_enviar' style='width:200px;height:30px'>Enviar Pedido de Orçamento</button></div>
			<div class='div_area' align='center'><br>Estamos anciosos para trabalhar com você!<br><img src='".LOCAL_IMGS."icon_parceria.png'></div>
		</div>";
	
		echo $form;
	}	
	
	
}
?>
	