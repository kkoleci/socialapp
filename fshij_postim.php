<?php
  session_start();
  include_once("db.php");
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];

 $post_id = $_SESSION['post_id'];
   
 

  if(isset($_REQUEST['submit'])!=''){

    $post_id=$_REQUEST['postim'];

  
    $sql= "DELETE FROM postime WHERE email = '$email' && post_id='$post_id'";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
  }
 ?>
