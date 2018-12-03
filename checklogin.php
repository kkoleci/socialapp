<?php
    session_start();
    include_once('db.php');
    if(isset($_REQUEST['submit'])){
        $username = $_REQUEST['username'];
        // $pass = md5($_REQUEST['pass']);
        $pass = $_REQUEST['pass'];

        $sql = "SELECT * FROM `perdoruesi`
            WHERE username = '${username}' AND
            password = '${pass}'";

        $res = mysqli_query($conn, $sql) or die (mysqli_error());
        $numrows = mysqli_num_rows($res);
        //printf("Select returned %d rows.\n", mysqli_num_rows($res));
        if($numrows > 0){
            $row = mysqli_fetch_object($res);
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $row->email;
            // $_SESSION['postime'] = $row->postime;
            $_SESSION['gjinia'] = $row->gjinia;
            $_SESSION['datelindja'] = $row->datelindja;
            $_SESSION['image'] = $row->image;
            header('Location: http://localhost/Project_Social_Network/kryesimi.php');
            // echo "login sukses";
        }else{
            header('Location: http://localhost/Project_Social_Network/login_page.html');
            // echo "login jo sukses";

        }
    }

?>
