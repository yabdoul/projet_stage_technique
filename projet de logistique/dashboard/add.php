<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="logistique";
$name = $_GET['name'] ; 
$cout_t = $_GET['c_trans'] ; 
$cout_a =$_GET['c_achat'] ; 
$localisation = $_GET['localisation'] ; 
$qualite=$_GET['qualite'] ;
$reputation =$_GET['reputation'] ; 
$cout  = $_GET['cout'] ; 
if(isset($_GET['submit']))
{
$conn = new mysqli($servername, $username, $password,$db);
if ($conn) {
echo "connected " ; 
$sql="insert into fournisseur(nom_fou,cou_trans,cou_achat,qualité_transport,localisation,réputation) values('$name','$cout_t','$cout_a','$qualite','$localisation','$reputation')" ; 
$conn->query($sql) ; 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
else
{
  echo "not conected"  ; 


}
;








?>