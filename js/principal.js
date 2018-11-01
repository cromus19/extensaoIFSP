$( document ).ready(function() {
 
    $("#teste" ).click(function( event ) {
        if (! validaCPF()){
            $("#validaCPF").value("CPF Inválido!");
            event.stopPropagation();
        }
    });
})