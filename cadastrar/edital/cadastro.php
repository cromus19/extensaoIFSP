<?php 
 
$professor = $_POST['professor']; 
$qtd_total = $_POST['qtd_total']; 
$qtd_def = $_POST['qtd_def'];
$qtd_negro = $_POST['qtd_negro'];
$qtd_geral = $_POST['qtd_geral']; 
$descricao = $_POST['descricao'];
$dataInicio = $_POST['dataInicio'];
$dataFim = $_POST['dataFim']; 
$curso = $_POST['curso'];

$qtd_total = intval($qtd_total);
$qtd_def = intval($qtd_def);
$qtd_negro = intval($qtd_negro);
$qtd_geral = intval($qtd_geral);

$qtd_somada = $qtd_def + $qtd_negro + $qtd_geral;

if ($professor == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do professor deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}else if($qtd_total == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do quantidade total deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}else if($qtd_def == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do quantidade deficiente deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}else if($qtd_negro == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do quantidade negros deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}else if($qtd_geral == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do quantidade geral deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}else if($descricao == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo de descrição deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}
else if($dataInicio == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Data de Inicio deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}
else if($dataFim == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo Data de Fim deve ser preenchido');window.location.href='cadastro_edital.php';</script>";
}
else if($curso == ""){
  echo"<script language='javascript' type='text/javascript'>alert('O campo do curso deve ser selecionado');window.location.href='cadastro_edital.php';</script>";
}else if($qtd_somada <> $qtd_total){
  echo"<script language='javascript' type='text/javascript'>alert('O valores de vagas, quando somados, precisam atingir a quantidade total!');window.location.href='cadastro_edital.php';</script>";
}else if($curso == 0){
  echo"<script language='javascript' type='text/javascript'>alert('Por favor, adicione um curso primeiro');window.location.href='cadastro_edital.php';</script>";
}else{
  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
  $query = "INSERT INTO edital(professor, dt_inicio, dt_fim, qtd_total, qtd_deficiente, qtd_negro, qtd_geral, descricao, curso) VALUES ('$professor', '$dataInicio', '$dataFim', '$qtd_total', '$qtd_def', '$qtd_negro', '$qtd_geral', '$descricao', '$curso')";
  $insert = mysqli_query($connect,$query);
           
  if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Edital cadastrado com sucesso!');window.location.href='cadastro_edital.php';</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');/script>";
    }
}
?>