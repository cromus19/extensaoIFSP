<?php 
echo file_get_contents("header.html");
$connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
$query_select = "select id, nome from curso";
$select = mysqli_query($connect,$query_select);
if (mysqli_num_rows($select) > 0) {
    while($row = mysqli_fetch_assoc($select)) {
        echo "<option value='" . $row["id"]. "'>" . $row["nome"] . "</option>";
    }
} else {
    echo "<option value='0'>Sem Curso</option>";
}
echo file_get_contents("body.html");
?>