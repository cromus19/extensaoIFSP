<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  setcookie("tipo", "", time() + (86400 * 30), "/");
  setcookie("login","");
  header('Location: /index.html');
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){
  if (!isset($_COOKIE['tipo'])){
    echo "<script language='javascript' type='text/javascript'>alert('Você não fez login ainda!');window.location.href='/index.html'</script>";
  }else if($_COOKIE['tipo'] == "ALUNO"){
    echo "<script language='javascript' type='text/javascript'>alert('Você não tem permissão para essa página!');window.location.href='/index.html'</script>";
  }else{
    echo file_get_contents("adm_page.html");
  }
}
?>