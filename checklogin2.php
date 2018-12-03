<?php
    session_start();
    include_once('db.php');
    if(isset($_REQUEST['submit'])!=''){
        $username = $_REQUEST['username'];
        $pass = md5($_REQUEST['pass']);

        $sql = "SELECT * FROM `perdoruesi`
            WHERE username = '$username' AND
            password = '$pass'";

            $res = mysql_query($sql) or die(mysql_error());
            $numrows = mysql_num_rows($res);
            if($numrows > 0){
                $row = mysql_fetch_object($res);
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $row->email;
                $_SESSION['likes'] = $row->likes;
                $_SESSION['pershkrimi'] = $row->pershkrimi;
                $_SESSION['postime'] = $row->postime;
                $_SESSION['gjinia'] = $row->gjinia;
                $_SESSION['datelindja'] = $row->datelindja;
                $_SESSION['shoket'] = $row->shoket;
                $_SESSION['postime'] = $row->postime;
                
                header('Location: http://localhost/Project_Social_Network/layout.php');
            }else{
                header('Location: http://localhost/Project_Social_Network/login_page.html');

            }
        }

?>
