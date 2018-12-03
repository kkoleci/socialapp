<?php
  session_start();
  Include('db.php');
  if(isset($_REQUEST['submit'])!='')
  {

    $username = $_REQUEST['username'];
 // $password = md5($_REQUEST['password']);
    $password = $_REQUEST['password'];


    




    $target_dir = "user_images/";



    $target_file = $target_dir.basename($_FILES['foto']['name']);
    //$target = $_FILES['foto']['name'];
    //$image = $_FILES['foto']['name'];



 move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $sql="INSERT INTO perdoruesi (username,email,gjinia,datelindja,password,image)
    VALUES('$username', '".$_REQUEST['email']."', '".$_REQUEST['gjinia']."'
    , '".$_REQUEST['datelindja']."', '$password', '$target_file')";
    //$res = mysql_query($sql);

    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    if($res){
      echo ("Rregjistrimi u krye");
      echo "<br>";
      echo '<a href="login_page.html">Kliko ketu per te vazhduar</a>';
    }else {
      echo "Ka nje problem";
    }
  }
 ?>
