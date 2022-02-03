<?php
header('Content-type: text/html; charset=UTF-8');

chdir(dirname(__FILE__));

chdir('../');

include_once getcwd().'/Base.class.php';


final class Contato extends Base{



	
	
	public function dependencias(){

		echo "
		<link rel='stylesheet' href='".RAIZ_SITE_SMP."contato/contato.css' type='text/css' media='all'>
		<script type='text/javascript' src='".RAIZ_SITE_SMP."contato/contato.js'></script>";
	}



	
	
	public function conteudo(){
		
		$form =  "	
			<div class='conteudo'>
				<br><br><br><br>
				<table id='tb_contato'>
					<tr>
						<td width='50%' align='left'>
						<div align='center' style='margin:5px 0px 5px 0px'><b>Deixe-nos uma mensagem:</b></div>
						Nome:<span class='requerido'>*</span><br>
						<input type='text' id='nome' style='width:98%' maxlength='150' >
						Empresa:
						<input type='text' id='empresa' style='width:98%' maxlength='150' >
						E-mail:<span class='requerido'>*</span><br>
						<input type='text' id='email' style='width:98%' maxlength='150' >
						Mensagem:<span class='requerido'>*</span><br>
						<textarea id='msg' style='width:98%;height:200px' maxlength='450' ></textarea>
						<div style='width:98%;margin-top:5px' align='right'><button id='bt_enviar' style='width:120px;height:30px'>Enviar</button></div>
						</td><td width='50%' align='center' valign='top'>
						<br><br><br>
						<p><img src='".LOCAL_IMGS."icon_email_black.png' class='mark' style='vertical-align:middle'>contato@mscsolucoes.com.br</p>
						<p><br>
						<img src='".LOCAL_IMGS."icon_whatsapp.png' style='vertical-align:middle;height:30px;margin-right:10px'>(91) 99293-4270 (vivo)<br><br>
						<img src='".LOCAL_IMGS."icon_tel.png' style='vertical-align:middle;height:30px;margin-right:10px'>(91) 98959-1697 (tim)<br><br>
						</p>
						</td>
					</tr>
				</table>
			</div>";
		
		echo $form;
	}	
	
	
}
?>