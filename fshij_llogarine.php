<?php
  session_start();
  include_once("db.php");
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
 

  if(isset($_REQUEST['submit'])!=''){

  
  
  
    $sql= "DELETE FROM perdoruesi WHERE email = '$email' ";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
  }
 ?>
