<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tirana_argetohet";

//krijojme lidhjen me db
$conn = new mysqli($servername, $username, $password, $dbname);

//kontrollojm lidhjen
if($conn->connect_errno){
  die("Connection failed: " . $conn->connect_error);
}


echo $conn->host_info . "\n";


?>