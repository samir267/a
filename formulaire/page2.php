<?php
if(!empty($_POST['nom'])  and !empty($_POST['prenom']) and !empty($_POST['adresse']) and !empty($_POST['ville']) and !empty($_POST['code'])){

    echo "<table>";
    foreach($_POST as $key => $val){
    
    
        echo " 
        <tr style='border:1px solid black; font-size:18; font-weight:bold'> 
        <td style='border:1px solid black; font-size:18; font-weight:bold'> $key </td>  
        <td style='bolorder:1px solid black; font-size:18; font-weight:bold'> $val </td>
        </tr>";
  }
    echo "</table>";
}
else{
      echo "erreure";

}






?>