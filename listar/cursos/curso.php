<?php 

  $connect = mysqli_connect('localhost','id7285669_ifsp','ifsp123','id7285669_extensao');	
  if (empty  ($_GET["remove"]) and empty ($_GET["edita"])) {
	echo file_get_contents("header.html");
  }
   
  else {
	if ((empty ($_GET["edita"])) {
		$query = "delete from curso where id = ".$_GET["remove"];
 		$select = mysqli_query($connect,$query);
	}
  }
  
  $query = "select * from curso";
  $select = mysqli_query($connect,$query);
    
  echo "<table>"   ;        
  if (mysqli_num_rows($select) > 0) {
    // output data of each row
    echo "<tr><th>Nome</th><th>Descricao</th></tr>";
    while($row = mysqli_fetch_assoc($select)) {
        echo " <tr>
                    <td>".$row["nome"]."</td>
                    <td>".$row["descricao"]."</td>
                    <td>
                        <a onclick= edita('".$row["id"]."') class='waves-effect waves-light btn'>
                            <i class='material-icons'>edit</i>
                        </a>
                    </td>
                    <td>
                        <a onclick= remove('".$row["id"]."') class='waves-effect waves-light btn'>
                            <i class='material-icons'>delete</i>
                        </a>
                    </td>
                </tr>";
    }
    echo "</table>";
} else {
    echo "Não há cursos cadastrados!";
}
echo file_get_contents("body.html");
?>
