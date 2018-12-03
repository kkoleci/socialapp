<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="stili.css">
    <style media="screen">
        .postimi{
            border: 1px solid black;
            border-radius: 25px;
            top: 25%;
            position: fixed;
            left: 50%;
            width: 30em;
            height: 10em;
            margin-top: -9em;
            margin-left: -15em;

        }
      label{
        display: inline-block;
        float: left;
        clear: left;
        width: 250px;
        text-align: right;
      }
      input,select{
        display: inline-block;
        float: left;
      }

    </style>
    <title>Home Page</title>
</head>

<body>
    <?php
      include('menu.php');
    ?>
    <div style="width:100%">
        <div style="background-color:lightblue; width:100%; text-align:center">
            <h1>Mireseerdhet ne Tirana Argetohet </h1>
        </div>
        <div style="background-color:lightblue; height:900px;width:200px;float:left;">
        </div>
        <div style="background-color:#eee; height:900px;width:1487px;float:left;">
            <div class="postimi">
                <?php include_once('postimi.php') ?>
            </div>
            <div class="postime">

            </div>
        </div>
        <div style="background-color:lightblue; height:900px;width:200px;float:right;">
            <div style="text-align:center"><b>Notifikime</b></div>

        </div>
        <div style="background-color:lightblue;clear:both">
            <center>
                Copyright © 2017 tirana_argetohet.al
            </center>
        </div>
    </div>
</body>
</html>
