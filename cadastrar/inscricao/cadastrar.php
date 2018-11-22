<?php
$edital = $_GET['edital'];
$login = $_COOKIE['login'];

$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query2 = "select id from usuarios where email='$login'";
$select = mysqli_query($connect,$query2);
$array = mysqli_fetch_array($select);
$login = $array['id'];

$data = date('Y-m-d H:i:s');
$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query = "insert into inscricao (edital, usuario, dt_inscricao) values ($edital, $login,'$data')";
$select = mysqli_query($connect,$query);
header('Location: /aluno_page.php');
?>