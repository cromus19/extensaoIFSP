<?php 
  echo file_get_contents("header.html");

  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');
  $query = "select * from edital";
  $select = mysqli_query($connect,$query);
    
  echo "<table>"   ;        
  if (mysqli_num_rows($select) > 0) {
    // output data of each row
    echo "<tr><th>Nome</th><th>Descricao</th></tr>";
    while($row = mysqli_fetch_assoc($select)) {
        echo " <tr>
                    <td>".$row["nome"]."</td>
                    <td>".$row["descricao"]."</td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "Não há editais cadastrados!";
}
echo file_get_contents("body.html");
?>