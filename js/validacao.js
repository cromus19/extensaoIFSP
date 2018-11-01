$( document ).ready(function() {
 
    $("#cadastrar" ).click(function( event ) {
        if (! validaCPF($("#cpf").val())){
            $("#validaCPF").val("CPF Inválido!");
            event.stopPropagation();
        }
    });
});


validaCPF = function (cpf){
		if (cpf.length != 11){
			document.getElementById('resultado').innerHTML="CPF INVALIDO";
			 event.stopPropagation();
			return false;
		}
		else {
			//Primeira verificação
			var soma = 0;
			for (i = 0; i<=8; i++){
				soma+=cpf[i]*(10-i);
			}
			resto = ((soma*10)%11 == 10)? 0:((soma*10)%11);
			if (resto != cpf[9] ){
				document.getElementById('resultado').innerHTML="CPF INVALIDO";
				 event.stopPropagation();
				return false;
			}
			
			//Segunda verificação
			soma = 0;
			for (i = 0; i<=9; i++){
				soma+=cpf[i]*(11-i);
			}
			resto = ((soma*10)%11 == 10)? 0:((soma*10)%11);
			if (resto != cpf[10] ){
				document.getElementById('resultado').innerHTML="CPF INVALIDO";
				 event.stopPropagation();
				return false;
			}
			document.getElementById('resultado').innerHTML="CPF VALIDO";
			return true;
		}
	}