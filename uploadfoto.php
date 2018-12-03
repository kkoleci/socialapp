<?php
  session_start();
  include_once('db.php');
  $target_dir = "user_images/";
  $target_file = $target_dir . basename($_FILES['foto']['name']);
  $uploadOK = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
  if(isset($_POST['submit'])){
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false){
      $uploadOK = 1;
    }else{
      echo "File is not an image";
      $uploadOK = 0;
    }
    if(file_exists($target_file)){
      echo "Sorry, file already exists.";
      $uploadOK = 0;
    }
    if($uploadOK == 0){
      echo "Sorry, your file was not uploaded";
    }else{
      move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
      $email = $_SESSION['email'];
      $sql = "INSERT INTO foto (email,url) VALUES('$email','$target_file')";
      $res = mysql_query($sql);
      if($res){
        header('Location: http://localhost/Project_Social_Network/foto.php');
      }else
        echo 'Upload nuk u krye';

    }

  }

 ?>
