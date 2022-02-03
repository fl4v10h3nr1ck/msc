<?php




class BD{


private 				$servidor;
private  				$usuario;
private  				$senha;
private  				$banco;
private  				$con;








/*****************   inicio contrutores ************************/






	function __construct(){
	
	$this->servidor 					= 'localhost';
	$this->banco						= 'mscsoluc_geral';
	$this->usuario						= 'mscsoluc_user';
	$this->senha						= 'u537_bd_f0rm5_ae12';
	}


	
	
	
	
	
	final function conecta(){
	
	$this->con = mysql_connect($this->servidor,$this->usuario,$this->senha);
	
	if( !$this->con)
	return false;
	
	if(!mysql_select_db($this->banco))
	return false;
	
	//importante para a saída com acentuacao via BD
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	return $this->con;
	}
	
	
	
	
	
	

	
	
	
	final function getReferencia(){
	
	return $this->con;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	final function desconecta(){
	
	mysql_close($con);
	}
	
	
	
	
	
}
?>