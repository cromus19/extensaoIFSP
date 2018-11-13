<?php 

  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
  
  
	$query_select = "SELECT email FROM usuarios WHERE email = '$login'";
	$select = mysqli_query($connect,$query_select);
	$array = mysqli_fetch_array($select);
	$logarray = $array['email'];
    if ($logarray == $login) {
		$query_select = "SELECT senha FROM usuarios WHERE senha = '$senha'";
		$select = mysqli_query($connect,$query_select);
		$array = mysqli_fetch_array($select);
		$logarray = $array['senha'];
		
		if ($logarray == $senha) {
						setcookie("login",$login, time() + (86400 * 30), "/");
						$query_select = "SELECT ADM from usuarios WHERE email = '$login'";
						$select = mysqli_query($connect,$query_select);
						$array = mysqli_fetch_array($select);
						$logarray = $array['ADM'];
						if ($logarray == 1){
							setcookie("tipo", "ADM", time() + (86400 * 30), "/");
							header("Location:/adm_page.php");
						}else{
							setcookie("tipo", "ALUNO", time() + (86400 * 30), "/");
							header("Location:/aluno_page.php");
						}
		}
		else{
			echo"<script language='javascript' type='text/javascript'>alert('Senha incorreta');window.location.href='/login.php';</script>";
			die();
		}
    }else{         
		echo"<script language='javascript' type='text/javascript'>alert('Usuário incorreto');window.location.href='/login.php';</script>";
        die();
    }
?>