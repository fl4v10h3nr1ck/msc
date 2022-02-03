
	jQuery(document).ready(function(){
		
		jQuery('#cad_tel_num').focus(function(){
		
		if(jQuery('#cad_tel_num').val() == "(XX) XXXXX-XXXX")
		jQuery('#cad_tel_num').val("");
		});
		

		jQuery('#bt_cad_tel').click(function(){
		
			jQuery.post( 
			$("#PATH").val()+'liguepramim/acao.php', 
			{
				nome:jQuery("#cad_tel_nome").val(),
				tel:jQuery("#cad_tel_num").val(),
				email:jQuery("#cad_tel_email").val()
			}, 
			function(requestReturn){
				
				console.log(requestReturn);
				
				var aux = jQuery.parseJSON( requestReturn.substring(requestReturn.indexOf("{")) );

				if(aux.status){
					
					jQuery("#cad_tel_nome").val("");
					jQuery("#cad_tel_num").val("(XX) XXXXX-XXXX");
					jQuery("#cad_tel_email").val("");
					
					alert("Dados cadastrados com sucesso! Em breve entraremos em contato!");
				}				
				else{
						
					var erro = "Infelizmente um erro ocorreu!\n\n";
			  
					for( var i = 0; i < aux.erros.length; i++)
					erro+=" - "+aux.erros[i]+"\n"; 
			
					alert(erro);
				}
			});
		});
	});

	
	
	
	function getAltura(){
					
	if(window.innerHeight!= undefined)
	return window.innerHeight;
				
	var B= document.body, 
	D= document.documentElement;
	return Math.max(D.clientHeight, B.clientHeight);
	}
	
	