<?php

echo("teste");



include("usuario.php");



$usuario = new Usuario();


$usuario->nome = $_POST['nome']; 
$usuario->sobrenome = $_POST['nome']; 
$usuario->sexo = $_POST['sexo']; 
$usuario->idade = $_POST['idade']; 
$usuario->login = $_POST['login'];
$usuario->nomeCompleto = $_POST['nomeCompleto'];
$usuario->senha = $_POST['senha']; 
$usuario->email = $_POST['email'];
$usuario->CPF = $_POST['cpf'];
$usuario->deficiencia = $_POST['deficiencia']; 
$usuario->CID = $_POST['CID'];
$usuario->tipoVaga = $_POST['tipoVaga'];
$usuario->dataNascimento = $_POST['dataNascimento'];
$usuario->RG  = $_POST['RG'];
$usuario->rua = $_POST['rua']; 
$usuario->bairro = $_POST['bairro'];
$usuario->cidade = $_POST['cidade']; 
$usuario->CEP = $_POST['CEP'];
$usuario->telCasa = $_POST['telCasa']; 
$usuario->telCel = $_POST['telCel']; 
$usuario->etnia = $_POST['etnia']; 
$usuario->relacaoIF = $_POST['relacaoIF']; 
$usuario->obs = $_POST['obs'];
$usuario->ADM = $_POST['ADM'];

//$query = $usuario.criaSQL();

echo("teste2");

echo($query);

?>