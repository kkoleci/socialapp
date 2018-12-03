<?php
  session_start();
  unset($_SESSION);
  session_destroy();
  header("Location: http://localhost/Project_Social_Network/login_page.html")
 ?>
