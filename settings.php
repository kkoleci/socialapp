<?php
    session_start();

//  
?>

<!DOCTYPE html>
<html>
  <head>
    <script>
    function validateForm() {
    var x = document.forms["ndryshim_passwordi"]["pass"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
      function chkForm() {
            if (ndryshim_passwordi.pass.value != ndryshim_passwordi.retype.value) {
                alert("Password does not match");
                ndryshim_passwordi.pass.value = "";
                ndryshim_passwordi.retype.value = "";
                ndryshim_passwordi.pass.focus();
                return false;
            }
        }
            function sendMe() {
                evt.preventDefault();
                try {
                    someBug();
                } catch (e) {
                    throw new Error(e.message);
                }
                return false;
            }

            // function checkForm() {
            //     if (settings.new.value != settings.renew.value) {
            //         alert("Passwordi i ri ,nuk perputhet me riperseritesin e tij!");
            //         settings.new.value = "";
            //         settings.renew.value = "";
            //       settings.new.focus();
            //         return false;
            //     }
            }

            $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
        </script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <style media="screen">
      body{
        margin-top:60px;
      }
    </style>
    <title></title>
  </head>
  <body>

      <div class="container ">
        <div class="jumbotron">
         <div class="row">
          <div class="col-xs-12">



              <ul  class="nav nav-tabs">
              <li class="dropdown">
                 <a class="dropdown-toggle" data-toggle="dropdown" href="kryesimi.php"><font size="4"> Kryesimi</font> <span class="caret"></span>
                 </a>
                  <ul class="dropdown-menu">
                    <li><a href="kryesimi.php"><font size="4"> Kryesimi</font></a></li>
                    <li><a href="http://localhost/Project_Social_Network/home.html">HOME</a></li>
                                          
                  </ul>
                </li>
                  <!-- <li><a href="kryesimi.php"><font size="4">Kryesimi</font></a></li> -->
                  <li><a href="profili.php"><font size="4">Profili</font></a></li>

                  <li style="float: right;"><a href="setting.php" class="active"><font size="4">Settings</font></a></li>
                  <li data-toggle="tooltip" data-placement="top" title="Mire ardhshi!" style="float: right;"><a href="logout.php"><font size="4">Log out</font></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>



    <div class="container">
      <div  class="jumbotron">

        <div class="row">
          <div class="col-xs-12">

              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newpass" name="button">Change the Password</button> <br/>

              <br/>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#fshij" name="button">Delete your Account</button>
<!-- modal per ndry pass -->
    <div class="modal fade" id="newpass" role="dialog">
         <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                          <h4 class="modal-tittle">Change your Password</h4>
                  </div>
                    <div class="modal-body">

                        <!-- onsubmit="return sendMe() && validateForm() && chkForm()" -->

                        <form name="ndryshim_passwordi" action="ndryshopass.php"  method="post">
                          <div class="form-group">
                              <label for=""> Old Password: </label>
                              <input type="password" name="old" id="old" value="">
                          </div>
                          <div class="form-group">
                                <label for="">New Password: </label>
                                <input id="new" type="password" name="new" value="">
                          </div>
                        <div class="form-group">
                            <label for="">Retype: </label>
                            <input id="renew" type="password" name="renew" value="">
                        </div>


                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" name="button">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit"        value="Change"  onclick="return checkForm()">
                        </div>
                      </form>
              </div>
            </div>
          </div>



<!-- modal per fshi llog -->
    <div class="modal fade" id="fshij" role="dialog">
         <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                          <h4 class="modal-tittle">DELETE YOUR ACCOUNT</h4>
                  </div>
                    <div class="modal-body">

                        <!-- onsubmit="return sendMe() && validateForm() && chkForm()" -->

                        <form name="fshij" action="fshij_llogarine.php"  method="post">
                          <div class="form-group">
                              <p> Are you sure?</p>
                          </div>
                          <!--<div class="form-group">
                            <label for="">Perserit password-in: </label>
                            <input id="perserit" type="password" name="renew" value="">
                        </div>
                       -->

                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" name="button">Close</button>
                           <input type="submit" class="btn btn-danger" name="submit"        value="Delete"  onclick="return checkForm()">

                        </div>
                      </form>
              </div>
            </div>
          </div>



    </div>
  </div>


  </div>
 </div>
</div>
</body>
</html>
