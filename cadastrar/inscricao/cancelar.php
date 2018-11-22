<?php
$edital = $_GET['edital'];
$login = $_COOKIE['login'];

$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query2 = "select id from usuarios where email='$login'";
$select = mysqli_query($connect,$query2);
$array = mysqli_fetch_array($select);
$login = $array['id'];

$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query = "delete from inscricao where edital=$edital and usuario=$login";
$select = mysqli_query($connect,$query);
header('Location: /aluno_page.php');
?>