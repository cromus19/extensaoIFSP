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
	cpf_valor=false;
email_valor=false;
});

//Count content
maxL = 2000;
var bName = navigator.appName;

function taLimit(taObj) {
	maxL= taObj.getAttribute("maxlength");
  if (taObj.value.length == maxL) return false;
  return true;
}

function taCount(taObj, Cnt) {
  objCnt = createObject(Cnt);
  objVal = taObj.value;
  if (objVal.length > maxL) objVal = objVal.substring(0, maxL);
  if (objCnt) {
	if (bName == "Netscape") {
	  objCnt.textContent = maxL - objVal.length;
	} else {
	  objCnt.innerText = maxL - objVal.length;
	}
  }
  return true;
}

function createObject(objId) {
  if (document.getElementById) return document.getElementById(objId);
  else if (document.layers) return eval("document." + objId);
  else if (document.all) return eval("document.all." + objId);
  else return eval("document." + objId);
} //End Count content

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
		cpf_valor=true;
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
		email_valor=true;
	}
}

function submitForm(){
	if (email_valor == false){
		alert("Inserir E-mail Válido!");
	}else if(cpf_valor == false){
		alert("Inserir CPF Válido!");
	}else if (document.getElementById('senha').value != document.getElementById('confsenha').value){
		alert("As senhas não correspondem!");
	}else{
		document.getElementById("cadastro").submit();
	}
}

function submitFormADM(){
	if (email_valor == false){
		alert("Inserir E-mail Válido!");
	}else if (document.getElementById('senha').value != document.getElementById('confsenha').value){
		alert("As senhas não correspondem!");
	}else{
		document.getElementById("cadastro").submit();
	}
}


function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 31 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) {
        alert("Somente letras!");
        return false;
    }
    return true;
}