<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__)); 

chdir('../');

include_once getcwd().'/Base.class.php';


final class Portfolio extends Base{



	
	
	public function dependencias(){
	
	echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."portfolio/portfolio.css' type='text/css' media='all'>
		
		<link href='".RAIZ_SITE_SMP."libs/galeria/css/lightbox.css' rel='stylesheet'>
	
		<script src='".RAIZ_SITE_SMP."libs/galeria/js/lightbox.js'></script>";	
	}



	
	
	public function conteudo(){
	
	echo 
	"	<div class='conteudo'>
			<br><br><br><br>
			<div class='item'>
				<div align='center' class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/personale.png' data-lightbox='image-1' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_personale.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Personale	
				</div>
				<div align='center'>
					Sistema <i>Personale UP</i>
				</div>
				<div align='center'>
					WEB - INTRANET
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/bbarra.png' data-lightbox='image-2' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_bbarra.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Lab. Barbosa Barra	
				</div>
				<div align='center'>
					Sistema <i>DiaLab</i>
				</div>
				<div align='center'>
					DESKTOP - WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/depilsoft.jpg' data-lightbox='image-3' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_depilsoft.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					DepilSoft	
				</div>
				<div align='center'>
					Sistema <i>ERP DepilSoft</i>
				</div>
				<div align='center'>
					DESKTOP - WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/prefeitura_taua.png' data-lightbox='image-4' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_prefeitura_taua.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Pref. de S. A. do Tauá	
				</div>
				<div align='center'>
					<i>Portal da Transparência</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/bbarra_site.png' data-lightbox='image-5' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_bbarra_site.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Lab. Barbosa Barra	
				</div>
				<div align='center'>
					<i>Website Institucional</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/gphs.jpg' data-lightbox='image-6' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_gphs.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					UFPA (GPHS)	
				</div>
				<div align='center'>
					<i>Website Institucional</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>	
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/cris_cosmeticos.jpg' data-lightbox='image-7' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_cris_cosmeticos.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Cris Cosméticos
				</div>
				<div align='center'>
					Sistema <i>ERP WEB</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>	
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/hrc.jpg' data-lightbox='image-8' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_hrc.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Hosp. Reg. de Cametá
				</div>
				<div align='center'>
					Sistema <i>DiaLab</i>
				</div>
				<div align='center'>
					DESKTOP - WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/pref_cameta.jpg' data-lightbox='image-9' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_pref_cameta.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Prefeitura de Cametá
				</div>
				<div align='center'>
					Sistema <i>sisIPTU</i>
				</div>
				<div align='center'>
					DESKTOP
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/camara_sat.png' data-lightbox='image-10' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_camara_sat.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Câm. de S. A. do Tauá	
				</div>
				<div align='center'>
					<i>Portal da Transparência</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/esaccon.png' data-lightbox='image-11' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_esaccon.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Esaccon	
				</div>
				<div align='center'>
					Sistema <i>Regulador Fiscal</i>
				</div>
				<div align='center'>
					DESKTOP
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/joao_batista.png' data-lightbox='image-12' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_joao_batista.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Lab. João Batista
				</div>
				<div align='center'>
					Sistema <i>DiaLab 3.0</i>
				</div>
				<div align='center'>
					DESKTOP - WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/monitoracao.png' data-lightbox='image-13' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_monitoracao.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Monitoração
				</div>
				<div align='center'>
					APP Android <i>Monitoração</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/meuguiapara.jpg' data-lightbox='image-14' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_meuguiapara.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Meu Guia Pará
				</div>
				<div align='center'>
					<i>Website Institucional</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/mubra.png' data-lightbox='image-15' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_mubra.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Mubra
				</div>
				<div align='center'>
					APP Android <i>Mubra</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/mototaxi.png' data-lightbox='image-16' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_mototaxi.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Mototaxi GO
				</div>
				<div align='center'>
					APP Android <i>MotoGO</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/meuguiapara_app.png' data-lightbox='image-17' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_meuguiapara_app.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Meu Guia Pará
				</div>
				<div align='center'>
					APP Android <i>MeuGuia</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/icart_site.png' data-lightbox='image-18' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_icart_site.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					iCart
				</div>
				<div align='center'>
					<i>Website Institucional</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/agendafull.png' data-lightbox='image-19' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_agendafull.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					iLucxus
				</div>
				<div align='center'>
					APP Android <i>AgendaFull</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>	
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/superbuska.png' data-lightbox='image-20' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_superbuska.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Super Buska
				</div>
				<div align='center'>
					APP Android <i>SuperBuska</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/icart.png' data-lightbox='image-21' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_icart.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					iCart
				</div>
				<div align='center'>
					APP Android/iOS <i>iCart</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/mubra_site.png' data-lightbox='image-22' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_mubra_site.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Mubra
				</div>
				<div align='center'>
					<i>Website Institucional</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/gaia.png' data-lightbox='image-23' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_gaia.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Ourivesaria
				</div>
				<div align='center'>
					<i>Loja Virtual</i>
				</div>
				<div align='center'>
					WEB
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/cupomlivre.jpg' data-lightbox='image-24' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_cupomlivre.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					iLucxus
				</div>
				<div align='center'>
					APP Android <i>CupomLivre</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/agrocontrole_carencia.png' data-lightbox='image-25' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_agrocontrole_carencia.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Citropar
				</div>
				<div align='center'>
					APP Android <i>AgroControle</i>
				</div>
				<div align='center'>
					MOBILE
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/civilcalc.jpg' data-lightbox='image-26' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_civilcalc.jpg' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					CivilCalc
				</div>
				<div align='center'>
					Sistema <i>CivilCalc</i>
				</div>
				<div align='center'>
					DESKTOP
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/markup.png' data-lightbox='image-27' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_markup.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Papelaria dos Estudantes
				</div>
				<div align='center'>
					Sistema <i>Markup</i>
				</div>
				<div align='center'>
					DESKTOP
				</div>
			</div>
			<div class='item'>
				<div align='center'  class='area_thumb'>
					<a href='".LOCAL_IMGS."portfolio/editorDoc.png' data-lightbox='image-28' data-title=''>
						<div class='thumb'>
							<img src='".LOCAL_IMGS."portfolio/t_editorDoc.png' class='thumb_img'>
						</div>
					</a>
				</div>
				<div align='center'class='titulo'>
					Aliança Recup. de Crédito
				</div>
				<div align='center'>
					Sistema <i>EditorDoc</i>
				</div>
				<div align='center'>
					DESKTOP
				</div>
			</div>
			<div style='clear:both'></div>
		</div>";
	
	}	
	
	
}
?>