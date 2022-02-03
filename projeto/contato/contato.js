
	jQuery(document).ready(function(){
	
		jQuery('#bt_enviar').click(function(){
		
			jQuery.post( 
			$("#PATH").val()+'contato/acao.php',
			{nome:jQuery("#nome").val(),
			empresa:jQuery("#empresa").val(),
			email:jQuery("#email").val(),
			msg:jQuery("#msg").val()}, 
			function(requestReturn){
			
				console.log(requestReturn);
			
				var aux = jQuery.parseJSON( requestReturn.substring(requestReturn.indexOf("{")) );

				if(aux.status){
					
					jQuery("#nome").val("");
					jQuery("#empresa").val("");
					jQuery("#email").val("");
					jQuery("#msg").val("");
					
					alert("Mensagem enviada com sucesso, em breve entraremos em contato!");
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
	
	
	
	