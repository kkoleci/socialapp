<?php
  session_start();
  include_once('db.php');
  if(isset($_REQUEST['submit'])!=''){
    $tipi = $_REQUEST['sporte'];
    $vendi = $_REQUEST['vendi'];
    $dita = $_REQUEST['dita'];
    $ora = $_REQUEST['ora'];
    $minLojtar = $_REQUEST['minlojtar'];
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    $sql = "INSERT INTO postime (tipi,vendi,dita,ora,minLojtar,email,username)
            VALUES('$tipi','$vendi','$dita','$ora','$minLojtar','$email','$username')";
    $res = mysqli_query($conn, $sql);
    if($res){
      $post_id = mysqli_insert_id($conn);
      $sql = "INSERT INTO pjesemarres(email,post_id) VALUES('$email','$post_id')";
      $res = mysqli_query($conn, $sql);
      if($res)
        header("Refresh:0; url=kryesimi.php ");
    }else{

      echo 'Dicka nuk shkon';
    }
  }
 ?>
