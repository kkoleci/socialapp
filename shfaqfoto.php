<?php
  //session_start();
  include_once('db.php');
  $email = $_SESSION['email'];

  $sql = "SELECT * FROM foto WHERE email = '$email'";
  $res = mysql_query($sql);
  while($row = mysql_fetch_object($res)){
    $src = $row->url;
    echo '<img src="'.$src.'" height = "140" width = "140">';
  }
 ?>
