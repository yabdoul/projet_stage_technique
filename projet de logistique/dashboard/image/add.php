<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="logistique";
$name = $_GET['nom'] ; 
$cout_t = $_GET['cout_transport'] ; 
$cout_a =$_GET['cout_a'] ; 
$localisation = $_GET['localisation'] ; 
$qualité_trans=$_GET['qualité-trans'] ;
$reputation =$_GET['reputation'] ; 
if(isset($_GET['submit']))
{
$conn = new mysqli($servername, $username, $password,$db);
if ($conn) {
echo "connected " ; 
$sql="insert into fournisseur(nom_fou,cou_trans,cou_achat,qualité_transport,localisation,réputation) values('$nom','$cout_t','$cout_a','$qualite_trans','$localisation','$reputation')" ; 
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