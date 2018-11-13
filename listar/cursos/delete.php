<?php
$id = $_GET['id'];
$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query = "delete from curso where id = $id";
$select = mysqli_query($connect,$query);
header('Location: curso.php');
?>