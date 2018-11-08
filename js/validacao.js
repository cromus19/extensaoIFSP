$( document ).ready(function() {
 	$("#cpf").keyup(function() {
		$("#cpf").val(this.value.match(/[0-9]*/));
	});

	$("#telCasa").keyup(function() {
		$("#telCasa").val(this.value.match(/[0-9]*/));
	});

	$("#telCel").keyup(function() {
		$("#telCel").val(this.value.match(/[0-9]*/));
	});

	$("#CEP").keyup(function() {
		$("#CEP").val(this.value.match(/[0-9]*/));
	});
});

function tipoVagaChange(){
	var x = document.getElementById("tipoVaga").value;
	if (x == "3"){
		document.getElementById("CID").disabled=false;
		document.getElementById("CID").required=true;
	}else{
		document.getElementById("CID").disabled=true;
		document.getElementById("CID").required=false;
	}
}

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

function validacaoEmail(email) {
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email)) {
		document.getElementById("resultadoEmail").innerHTML="<font color='red'>Email inválido </font>";
		document.getElementById("resultadoEmail").hidden=false;
	}else{
		document.getElementById("resultadoEmail").hidden=true;
	}
}