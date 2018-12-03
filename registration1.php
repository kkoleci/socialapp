<?php
  session_start();
  Include('db.php');
  if(isset($_REQUEST['submit'])!='')
  {

    $username = $_REQUEST['username'];
    $password = md5($_REQUEST['password']);

    $sql="INSERT INTO perdoruesi (username,email,gjinia,datelindja,password)
    VALUES('$username', '".$_REQUEST['email']."', '".$_REQUEST['gjinia']."'
    , '".$_REQUEST['datelindja']."', '$password')";
    $res = mysql_query($sql);

    if($res){
      echo ("Rregjistrimi u krye");
      echo "<br>";
      echo '<a href="login_page.html">Kliko ketu per te vazhduar</a>';
    }else {
      echo "Ka nje problem";
    }
  }
 ?>
