<?php 
 
$sexo = $_POST['sexo']; 
$idade = $_POST['idade']; 
$login = $_POST['login'];
$nomeCompleto = $_POST['nome'];
$senha = $_POST['senha']; 
$email = $_POST['email'];
$CPF = $_POST['cpf'];
$deficiencia = $_POST['deficiencia']; 
$CID = $_POST['CID'];
$tipoVaga = $_POST['tipoVaga'];
$dataNascimento = $_POST['dataNascimento'];
$RG  = $_POST['RG'];
$rua = $_POST['rua']; 
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade']; 
$CEP = $_POST['CEP'];
$telCasa = $_POST['telCasa']; 
$telCel = $_POST['telCel']; 
$etnia = $_POST['etnia']; 
$relacaoIF = $_POST['relacaoIF']; 
$obs = $_POST['obs'];
$ADM = $_POST['ADM'];

//$db = mysqli_select_db('cadastro');
$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo email deve ser preenchido');window.location.href='/cadastro.html';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='/cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO `usuarios`(`login`, `nomeCompleto`, `senha`, `email`, `CPF`, `deficiencia`, `CID`, `tipoVaga`, `dataNascimento`, `RG`, `rua`, `bairro`, `cidade`, `CEP`, `telCasa`, `telCel`, `etnia`, `relacaoIF`, `obs`) VALUES ('$login', '$nomeCompleto', '$senha', '$email', '$CPF', '$deficiencia', '$CID', '$tipoVaga', '$dataNascimento', '$RG', '$rua', '$bairro', '$cidade', '$CEP', '$telCasa', '$telCel', '$etnia', '$relacaoIF', '$obs')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='/login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='/cadastro.html'</script>";
        }
      }
    }
?>