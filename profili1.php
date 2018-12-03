<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
  <style media="screen">
  .teDhena{

      top: 25%;
      position: fixed;
      left: 50%;
      width: 30em;
      height: 40em;
      margin-top: -9em;
      margin-left: -15em;

    }
    label{
      display: inline-block;
      float: left;
      clear: left;
      width: 250px;
      text-align: left;
    }
    .fotoProfili{
      border: 5px solid black;
      width: 140px;
      height: 140px;
      margin-left: 10%;
      margin-top: 10%;
    }

  </style>

<head>
    <link rel="stylesheet" href="stili.css">
    <meta charset="utf-8">
    <title>profili</title>
</head>
    <?php include('menu.php'); ?>
    <div style="width:100%">
      <div style="background-color:lightblue; width:100%; text-align:center">
          <?php echo "<h1>".$_SESSION['username']."</h1>" ?>
      </div>
      <div style="background-color:lightblue; height:900px;width:200px;float:left;">
        <div class="fotoProfili">
        </div><br><br><br><br>
        <div style="text-align: center; font-size:1.2em;">
          <a href="foto.php"><b>Foto</b></a><br>
          <a href="mesazhe.php"><b>Mesazhe</b></a>
        </div>
      </div>
      <div style="background-color:#eee; height:900px;width:1487px;float:left;">
          <?php include('teDhena.php') ?>
      </div>
      <div style="background-color:lightblue; height:900px;width:200px;float:right;">
          <div style="text-align:center; "><b>Notifikime</b>

          </div>
      </div>
      <div style="background-color:lightblue;clear:both">
          <center>
              Copyright © 2017 tirana_argetohet.al
          </center>
      </div>
  </div>
<body>

</body>

</html>
