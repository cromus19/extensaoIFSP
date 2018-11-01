<?php 


echo("teste");
class Usuario { 
    public $nome; 
    public $sobrenome; 
	public $sexo; 
	public $idade; 
	public $sobrenome; 
	public $login;
	public $nomeCompleto;
	public $senha; 
	public $email;
	public $CPF;
	public $deficiencia; 
	public $CID;
	public $tipoVaga;
	public $dataNascimento;
	public $RG ;
	public $rua; 
	public $bairro;
	public $cidade; 
	public $CEP;
	public $telCasa; 
	public $telCel; 
	public $etnia; 
	public $relacaoIF; 
	public $obs;

    
    
    function criaSQL() { 
        return "INSERT INTO usuarios ( nomeCompleto, senha, email, CPF, deficiencia, CID, 
		tipoVaga, dataNascimento, RG , rua, bairro, cidade, CEP, telCasa, telCel, etnia, relacaoIF, obs, ADM)
		VALUES ($nomeCompleto, $senha, $email, $CPF, $deficiencia, $CID,
		$tipoVaga, $dataNascimento, $RG , $rua, $bairro, $cidade, $CEP, $telCasa, $telCel, $etnia, $relacaoIF, $obs);";
    } 
}
?>
