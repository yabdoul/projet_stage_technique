<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="logistique";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn) {
    echo "connected " ; 
    $sql = "select * from  fournisseur";
    $result = $conn->query($sql);
$data =array() ; 
    if ($result->num_rows > 0) {
        echo "<table border=\'1' style=\'background=\'red''><tr> " ; 
        echo "<td>id_fou</td><td>nom_fou</td><td>cou_trans</td><td>cout_achat</td><td>qualité de trans</td><td>localisation</td><td>reputation</td><td>cout</td></tr>" ; 
       
        while($row = $result->fetch_assoc()) {
$data[]=$row ; 
echo json_encode($data) ; 
            echo "<tr>" ;
            foreach($row as $key=>$value)
       {
echo "<td>".$value."</td>"  ;

       }; 
        }echo "</table>" ;
    }
    
    
    
     else {
        echo "0 results";
    }
     ;
}













?>