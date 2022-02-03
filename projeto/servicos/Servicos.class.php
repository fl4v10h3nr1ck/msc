<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__)); 

chdir('../');

include_once getcwd().'/Base.class.php';


final class Servicos extends Base{
	
	
	
	
	public function dependencias(){
	
	echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."servicos/servicos.css' type='text/css' media='all'>
		<script type='text/javascript' src='".RAIZ_SITE_SMP."servicos/servicos.js'></script>";
	}

	
	
	
	public function conteudo(){
	
	echo "	
			<div class='conteudo'>
				<br><br><br><br>
				<p class='titulo' align='left'>Soluções únicas para empresas únicas</p>
				<p align='justify'>
					<img src='".LOCAL_IMGS."equipe2.jpg' align='right' style='width:300px;margin:0px 20px'>
					Desenvolvemos softwares sob medida 100% enquadrados na realidade do cliente. Nossos sistemas são construídos levando em consideração a dinâmica do mercado e, por isso, são adaptáveis e eficientes. Toda solução oferecida pela MSC deve:
				</p>
				<br>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Atender integralmente as necessidades do cliente;</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Ser simples de usar, manter e atualizar;</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Comprir os requisitos demandando menos recursos possíveis;</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Ser uma solução inteligente, bem planejada e estruturada;</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Possuir documentação clara e completa. A manutenção e atualização devem ser fácil.</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Priorizar sempre que possível a utilização de softwares e/ou tecnologias livres;</p>
				<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Seguir metodologias e padrões de projeto bem definidos;</p>
				<br>	
				<p align='justify'>Nossos orçamentos são sempre flexíveis, determinados exclusivamente por quanto o cliente pode investir (em tempo e dinheiro). Dessa forma, as soluções desenvolvidas se adequam à necessidade do cliente e não o contrário.</p>
					
				<p align='center' id='p_frase'><b>\"Nossas expectativas vão sempre além das metas\"</b></p>
					
				<div align='left'>Clique e confira:</div>
				<img src='".LOCAL_IMGS."banner_website.jpg' class='aba' onclick='javascript:showItem(\"serv_website\");'>
				<hr style='width:99.94%;height:1px;color:#066BED;background:#066BED'>
				<div class='item_servico' align='center' id='serv_website' ".(array_key_exists("id", $_GET) && strcmp($_GET['id'], "WEB") == 0?"style='display:block'":"").">
					<div class='container_item' align='left'>
						<p align='justify'>Desenvolvemos soluções WEB únicas e 100% gerenciáveis. Sites, lojas virtuais, intranets corporativas, sistemas WEB. Qualquer que seja a necessidade de sua empresa, pode ter certeza, temos a tecnologia certa e o melhor custo-benefício. As soluções WEB desenvolvidas pela MSC possuem os mais modernos padrões de desenvolvimento e as melhores tecnologias, dentre os quais é válido destacar:</p>
						<br>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Sistemas e websites 100% responsivos e adaptativos;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Otmizados para mecanismos de busca e redes sociais;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Otimizados para dispositivos móveis;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Scripts homologados e à prova de falhas;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Planejados desde início à facilitar a adição de novos recursos e atualizações;</p>
						<br>
						<div align='center'><hr style='width:40%;height:1px;color:#262E39;background:#262E39'></div>
							<p align='center'><a href='".RAIZ_SITE_SMP."index.php?op=SOL'><img src='".LOCAL_IMGS."bt_orcamento.png' class='bt_orçamento'></a></p>
					</div>
				</div>	
				<img src='".LOCAL_IMGS."banner_fabrica.jpg' class='aba' onclick='javascript:showItem(\"serv_fabrica\");'>
				<hr style='width:99.94%;height:1px;color:#285116;background:#285116'>
				<div class='item_servico' align='center' id='serv_fabrica' ".(array_key_exists("id", $_GET) && strcmp($_GET['id'], "SOFT") == 0?"style='display:block'":"").">	
					<div class='container_item' align='left'>
						<p align='justify'>Softwares de gestão oferencem um imenso ganho de produtividade, segurança de dados e automatização do acesso à informação. Temos experiência na criação de sistemas de:</p>
						<br>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Gestão financeira;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Gestão de estoque;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Gestão de serviços;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Folha de pagamento;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Contabilidade;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Gestão imobiliária;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Advocacia;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Controle de vendas;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Escolas, instituição de ensino e treinamento;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Agendas empresariais;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Sistema para Autoescolas;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Sistema para estatísticas e relatórios;</p>
						<br>
						<p align='justify'>Caso a necessidade da sua empresa não esteja na lista não se preoculpe, nossa equipe técnica conta com engenheiros de requisitos talentos que irão, de forma rápida e eficiente, projetar a melhor solução pra você!</p>
						<div align='center'><hr style='width:40%;height:1px;color:#262E39;background:#262E39'></div>
						<p align='center'><a href='".RAIZ_SITE_SMP."index.php?op=SOL'><img src='".LOCAL_IMGS."bt_orcamento.png' class='bt_orçamento'></a></p>
					</div>
				</div>	
				<img src='".LOCAL_IMGS."banner_infra.jpg' class='aba' onclick='javascript:showItem(\"serv_infra\");'>
				<hr style='width:99.94%;height:1px;color:#CF000A;background:#CF000A'>
				<div class='item_servico' align='center' id='serv_infra' ".(array_key_exists("id", $_GET) && strcmp($_GET['id'], "INFRA") == 0?"style='display:block'":"").">	
					<div class='container_item' align='left'>
						<p align='justify'>Há vários benefícios na terceirização do departamento de TI. Com a MSC, você não precisa mais se preocupar com isso, gerenciamos equipamentos, softwares e redes para empresas com suporte técnico rápido e eficiente. Se a sua necessidade é um software mas não dispõe da infraestrtura necessária, não se preocupe, nós cuidamos de tudo! desde a implantação da rede à configuração do sistema nas estações de trabalho. Podemos lhe ajudar com:</p>
						<br>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Projeto, implantação e reestruturação de redes;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Leventamento de servidores e serviços;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Configuração de estações de trabalho;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Sistemas de usuários, arquivos, e-mails;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Gestão de equipamentos de informática;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Suporte técnico (Helpdesk);</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Treinamento técnico;</p>
						<br>
						<div align='center'><hr style='width:40%;height:1px;color:#262E39;background:#262E39'></div>
						<p align='center'><a href='".RAIZ_SITE_SMP."index.php?op=SOL'><img src='".LOCAL_IMGS."bt_orcamento.png' class='bt_orçamento'></a></p>
					</div>
				</div>
				<img src='".LOCAL_IMGS."banner_treina.jpg' class='aba' onclick='javascript:showItem(\"serv_treina\");'>
				<hr style='width:99.94%;height:1px;color:#858584;background:#858584'>
				<div class='item_servico' align='center' id='serv_treina' ".(array_key_exists("id", $_GET) && strcmp($_GET['id'], "TREINA") == 0?"style='display:block'":"").">	
					<div class='container_item' align='left'>
						<p align='justify'>Oferecemos cursos de programação in loco individuais ou para equipes. Nossos cursos são flexíveis tanto na carga horária quanto no conteúdo programático que são definidos baseados na realidade do aluno. As aulas têm duração de 2 a 6 horas e podem ser realizadas 2 ou 3 vezes por semana. Ao finalizar o curso os alunos realizam um exame e recebem um certificado de conclusão.</p>
						<p align='justify'>Formamos programadores em pouquíssimas semanas! Escolha o curso:</p>
						<br>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Linguagem C (nível 1 e 2);</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Linguagem Java SE (nível 1 e 2);</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Linguagem Java EE;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Linguagem PHP;</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Desenvolvedor WEB (nível 1 e 2);</p>
						<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker_menor'>Engenharia de software;</p><br>
						<p align='justify'>...E solicite um orçamento!</p>
						<br>
						<div align='center'><hr style='width:40%;height:1px;color:#262E39;background:#262E39'></div>
						<p align='center'><a href='".RAIZ_SITE_SMP."index.php?op=SOL'><img src='".LOCAL_IMGS."bt_orcamento.png' class='bt_orçamento'></a></p>
					</div>
				</div>		
			</div>";
	
	}	
	
	
	
	
	
}
?>