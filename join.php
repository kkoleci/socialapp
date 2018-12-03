<?php
  session_start();
  include_once('db.php');
  $id = $_REQUEST['id'];
  if(isset($_REQUEST['id'])!=''){

  $email = $_SESSION['email'];
  $sql = "SELECT * FROM pjesemarres WHERE email = '$email' AND post_id = '$id'";
  $res = mysqli_query($conn, $sql);
  $numrows = mysqli_num_rows($res);

  if($numrows == 0){
    $sql2 = "SELECT * FROM postime WHERE post_id = '$id'";
    $per = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_object($per);
    $pjestar = $row->pjestar;
    $pjesemarres = $row->minLojtar;
    if($pjestar<$pjesemarres){
      $sql = "INSERT INTO pjesemarres (email,post_id) VALUES ('$email','$id')";
      $res = mysqli_query($conn, $sql);
      if($res){
        $pjestar = $pjestar+1;
        $inc = "UPDATE postime SET pjestar = '$pjestar' WHERE post_id = '$id'";
        $res2 = mysqli_query($conn, $inc);
        echo 'Join success';
      }else {
        echo 'Join no success';
      }
    }
  }
}


 ?>
