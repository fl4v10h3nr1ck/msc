<?php 

header('Content-type: text/html; charset=UTF-8');
		
if(!isset($_SESSION))
session_start();

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

chdir(dirname(__FILE__));

include_once getcwd().'/define.php';
 
include_once RAIZ_ABSOLUTA."sistema/estrutura/Estrutura.class.php";

$estrutura = new Estrutura;	
	
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	<head>
	
	<?php 
	
	$estrutura->cabecalho();
	
	$estrutura->dependencias();
	
	?>
	
	</head>
	<body>
		<div id='geral'>
			<div id='conteudo'>
			
			<?php $estrutura->conteudo(); ?>	
		
			</div>
		</div>	
	</body>
</html>