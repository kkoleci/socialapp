<?php
  session_start();
  include_once("db.php");
  if(isset($_REQUEST['submit'])!=''){
    $old = $_REQUEST['old'];
    $new = $_REQUEST['new'];
    $email = $_SESSION['email'];
    $sql= "SELECT * FROM perdoruesi WHERE email = '$email' AND password = '$old'";

    $res = mysqli_query($conn, $sql) or die(mysql_error());
    $numrows = mysqli_num_rows($res);
    if($numrows>0){
        $sql = "UPDATE perdoruesi SET password = '$new' WHERE email = '$email'";
        if(mysqli_query($conn, $sql))
        {
          echo 'Password changed successfully';
          echo '<br>';
          echo '<a href="kryesimi.php">Click here to continue...</a>';
        }
    }else {
      header('Location: http://localhost/Project_Social_Network/settings.php');
    }
  }
 ?>
