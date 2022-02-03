<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__)); 

chdir('../');

include_once getcwd().'/Base.class.php';


final class Institucional extends Base{



	
	
	public function dependencias(){
	
	echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."institucional/institucional.css' type='text/css' media='all'>";
	}



	
	
	public function conteudo(){
	
	echo 
	"	<div class='conteudo'>
			<br><br><br><br>
			<p class='titulo' align='left'>MSC Soluções</p>
			<p align='justify'>
			<img src='".LOCAL_IMGS."equipe.jpg' align='right' style='width:300px;margin:0px 20px'>Somos uma empresa que presta serviços em T.I. focados no desenvolvimento, gerenciamento, manutenção, adequação e atualização de softwares. Também ajudamos nossos clientes com toda a infraestrutura necessário à operação dos sistemas desenvolvidos como:
			</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Planejamento, reestruturação e implantação de redes;</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Gestão de equipamentos de informática;</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Consultoria especializada;</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Além é claro, de treinamento e escola de programação.</p>
			<p align='justify'>
			Logo, não construimos softwares somente, mas sim, acompanhamos de perto nossos clientes antes, durante e depois da conclusão de cada projeto afim de nos certificar que as soluções desenvolvidas realmente contribuíram positivamente. Nossas expectativas vão sempre além das metas.
			</p>
			<p class='titulo' align='left'>Como Trabalhamos</p>
			<p align='justify'>
			Buscamos sempre que possível evitar as complicações inerentes ao projeto e implatação de sistemas atráves de uma abordagem transparente, rápida e eficiente. Nossos clientes podem acompanhar todas as etapas do desenvolvimento, opinando e contribuindo se assim desejarem. Não temos e não queremos oferecer soluções prontas que raramente atendem 100% das necessidades dos diversos ramos do mercado. Construimos sistemas únicos para empresas únicas. O principal benefício dessa abordagem, além do foco no que é realmente importante, é que nossos clientes pagam unicamente pelo que precisam. Nossos orçamentos são baseados em dois fatores:
			</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>Tempo disponível;</p>
			<p><img src='".LOCAL_IMGS."icon_ok.png' class='marker'>valor de Investimento;</p>
			<p align='justify'>
			Ou seja, seu projeto se adequará perfeitamente ao prazo e ao investimento que você dispõe e não o contrário.
			</p>
			<div align='center' id='opcoes'>
				<div class='opcao'><a href='".RAIZ_SITE_SMP."index.php?op=SRV'><img src='".LOCAL_IMGS."nossas_solucoes.jpg'></a></div>
				<div class='opcao'><a href=".RAIZ_SITE_SMP."index.php?op=SOL'><img src='".LOCAL_IMGS."solicitacao.jpg'></a></div>
			</div>
			<div style='clear:both'></div>		
		</div>";
	
	}	
	
	
}
?>