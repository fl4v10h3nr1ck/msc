<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__)); 

chdir('../');

include_once getcwd().'/Base.class.php';


final class Home extends Base{



	
	
	public function dependencias(){
	
	echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."home/home.css' type='text/css' media='all'>
		<script type='text/javascript' src='".RAIZ_SITE_SMP."home/home.js'></script>";
	}



	
	
	public function conteudo(){
	
	echo 
	"	<div id='geral'>".
	
	$this->getAreaApresentacao().
	
	$this->getServicos().
	
	$this->getClientes().
	
	$this->getAreaTech().

	"	</div>";
	
	}	
	



	
	
	private function getAreaApresentacao(){
	
	echo "
			<div id='apresentacao'>
				<div id='opcoes' align='center'>
				<hr id='barra'>
					<table >
						<tr>
							<td align='center'>
							<a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=WEB'><img src='".LOCAL_IMGS."icon_web.png' class='icon_opcoes' title='Desenvolvimento WEB'></a>
							<a href='".RAIZ_SITE_SMP."?op=SVC&id=SOFT'><img src='".LOCAL_IMGS."icon_fabrica.png' class='icon_opcoes' title='Fábrica de Softwares'></a>
							<a href='".RAIZ_SITE_SMP."?op=SVC&id=INFRA'><img src='".LOCAL_IMGS."icon_ti.png' class='icon_opcoes' title='Infraestrutura em T.I.'></a>
							<a href='".RAIZ_SITE_SMP."?op=SVC&id=TREINA'><img src='".LOCAL_IMGS."icon_escola.png' class='icon_opcoes' title='Escola de Programação'></a>
							</td>
						</tr>
					</table>
				</div>
			</div>";
	}
	
	
	
	

	
	public function getServicos(){
	
	echo "	
			<div class='conteudo'>
				<div id='servicos' align='center'>
					<div class='item_servico'>
						<p class='titulo'>
						<img src='".LOCAL_IMGS."icon_webdev.png' style='width:30px;margin-right:10px'><b>Criação e Administração de Websites</b></p>
						<p align='justify' style='margin-top:30px;padding:25px'>Desenvolvemos soluções WEB únicas e 100% gerenciáveis. Sites, lojas virtuais, intranets corporativas, sistemas WEB. Qualquer que seja a necessidade de sua empresa, pode ter certeza, temos a tecnologia certa e o melhor custo-benefício. </p>
						<p align='right' style='margin-top:30px;padding-right:25px'><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=WEB'>Mais Detalhes...</a></p>
					</div>	
					<div class='item_servico'>	
						<p class='titulo'>
						<img src='".LOCAL_IMGS."icon_programacao.png' style='width:30px;margin-right:10px'><b>Fábrica de Software</b></p>
						<p align='justify' style='margin-top:30px;padding:25px'>Softwares de gestão oferencem um imenso ganho de produtividade, segurança de dados e automatização do acesso à informação. Saiba como alavancar seus negócios com um sistema seguro e estável, desenvolvido exclusivamente para a sua empresa.</p>
						<p align='right' style='margin-top:30px;padding-right:25px'><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=SOFT'>Mais Detalhes...</a></p>
					</div>			
					<div class='item_servico'>
						<p class='titulo'>
						<img src='".LOCAL_IMGS."icon_infra.png' style='width:30px;margin-right:10px'><b>Infraesturura em TI</b></p>
						<p align='justify' style='margin-top:30px;padding:25px'>Há vários benefícios na terceirização do departamento de TI. Com a MSC, você não precisa mais se preocupar como isso, gerenciamos equipamentos, softwares e redes para empresas com suporte técnico rápido e eficiente.</p>
						<p align='right' style='margin-top:30px;padding-right:25px'><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=INFRA'>Mais Detalhes...</a></p>
					</div>		
					<div class='item_servico'>
						<p class='titulo'>
						<img src='".LOCAL_IMGS."icon_treina.png' style='width:30px;margin-right:10px'><b>Escola de Programação</b></p>
						<p align='justify' style='margin-top:30px;padding:25px'>Seu objetivo é aprender programação ou você necessita de um curso personalizado para sua equipe? Ministramos cursos de programação in loco focados nas suas necessidades, aprende o que precisa no tempo e ritmo que desejar!</p>
						<p align='right' style='margin-top:30px;padding-right:25px'><a href='".RAIZ_SITE_SMP."index.php?op=SVC&id=TREINA'>Mais Detalhes...</a></p>
					</div>
					<div style='clear:both'></div>	
					<br><br><br>
					<div align='center'>
						<div align='center' style='width:400px' class='bt laranja' onClick='javascript:window.open(\"".RAIZ_SITE_SMP."index.php?op=SOL\", \"_SELF\")'>
							Solicite um Orçamento Gratuito!
						</div>
					</div>
					<br><br><hr width='100%'><br>
				</div>
			</div>";
	}
	
	
		
	

	
	public function getClientes(){
		
	echo "
			<div class='conteudo' align='center'>
				<p id='clientes_titulo'><b>Um seleto grupo de sucesso!</b></p>
				<p id='clientes_subtitulo'>Nossos clientes crescem a cada dia e temos orgulho de fazer parte disso. Confira os mais recentes cases de sucesso:</p>
				<div align='center' id='container_itens_clientes'>		
					<div class='item_clientes_principais'><img src='".LOCAL_IMGS."clientes/personale.jpg' style='width:100%;margin-top:30px'></div>
					<div class='item_clientes_principais'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/bbarra.png' style='width:90%;margin-top:20px'></div>
					<div class='item_clientes_principais'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/depilsoft.jpg' style='width:60%;margin-top:0px'></div>
					<div class='item_clientes_principais'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/prefeitura_sat.png' style='width:60%;margin-top:10px'></div>
					
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/ufpa.jpg'></div>
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/cris_cosmeticos.png'></div>
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/hrc.jpg' ></div>
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/prefeitura_cameta.jpg'></div>
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/camara_sat.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/esaccon.jpg' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/logo_joao_batista.jpg' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/logo_monitoracao.jpg' ></div>		
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/meu_guia_para.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/mubra.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/mototaxi.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/icart.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/superbuska.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/gaia.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/cupomlivre.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/citropar.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/civilcalc.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/markup.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/papelaria_estudando.png' ></div>	
					<div class='item_clientes'><img class='img_chamadas' src='".LOCAL_IMGS."clientes/moreira.jpg' ></div>
					<div style='clear:both'></div>	
					<div align='center'>
						<div align='center' style='width:400px' class='bt laranja' onClick='javascript:window.open(\"".RAIZ_SITE_SMP."index.php?op=PRT\", \"_SELF\")'>
							Veja Nosso Portfólio Completo!
						</div>
					</div>	
					<br><br><hr width='100%'><br>
				</div>
			</div>";	
	}
	
	
	
	
	
	
	public function getAreaTech(){
	
	echo "
			<div class='conteudo'>
				<div class='area_total' id='div_tecnologias' align='center'>
					<div class='container' align='center'>
						<div id='descricao_tech'>
						<p id='tech_titulo'><b>As melhores tecnologias e a melhor equipe técnica!</b></p>
						<p id='sub_titulo'>Profissionais que sabem o que usar, quando usar e porque usar. Na MSC não há soluções prontas, cada projeto é planejado para satisfazer 100% as necessidades do cliente.</p>
						</div>
						<table width='100%'>
							<tr>
								<td align='center' width='8.3%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_css3.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_html5.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_java.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_joomla.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_jquery.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_js.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_php.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_python.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_wordpress.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/logo_blogger.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/android.png' class='logo_tech'>
								</td><td align='center' width='8.33%'>
								<img src='".LOCAL_IMGS."logos_tech/ios.png' class='logo_tech'>
								</td>
							</tr>
						</table>
					</div><br><br><br>
				</div>
			</div>";
	}

	
	
	
	
}
?>