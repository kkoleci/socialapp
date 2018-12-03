<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="http://www.google.com/jsapi" type="text/javascript"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script type="text/javascript">google.load("jquery", "1.3.2");</script>
      


             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta charset="utf-8">
    <style media="screen">
      body{
        margin-top:60px;
      }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
          $(".join").click(function(){
            var id = this.id;
            alert(id);
          });

        });


//search, filtering
   $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

        
    </script>
    <title></title>
  </head>
  <body>

      <div class="container ">
        <div class="jumbotron">


        <div class="row">
          <div class="col-xs-12">



        <ul  class="nav nav-tabs">
          <li><a href="home.html"><font size="4">Home</font></a></li>
          <li><a href="kryesimi.php"><font size="4">Kryesimi</font></a></li>
          <li><a href="profili.php"><font size="4">Profili</font></a></li>

          <li style="float:right;"><a href="settings.php"><font size="4">Settings</font></a></li>
          <li style="float: right;"><a  href="logout.php" data-toggle="tooltip" data-placement="top" title="Mire ardhshi!"><font size="4">Log out</font></a></li>

          <li style="float: middle;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="myInput" type="text" placeholder="Search.."> </li>
        </ul>
        </div>
        </div>
        </div>
      </div>




        <div class="container">
          <div  class="jumbotron">

          <div class="row">
            <div class="col-xs-12">
                  <div class="pull-right">
                      <div class="btn-group">

                       <!--
                        <button type="button" class="btn btn-success btn-filter" data-target="pagado"> <a href="http://localhost/Project_Social_Network/home.html"> HOME</a></button>

               
                        <button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
                        <button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
                        <button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>

                -->
                      </div>
                    </div>

        

          <h3 style="text-align:center;">Tirana Argetohet</h3>

  <!-- Modal -->
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#posto" name="button">Posto</button>

        <div class="modal fade" id="posto" role="dialog">
          <div class="modal-dialog">

            <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                              <h4 class="modal-title">Zgjidhni te dhenat</h4>
                            </div>
                  <div class="modal-body">

                            <form class="" action="getpost.php" method="post">
                              <div class="form-group">
                                <label for="sporti">Sporti:</label>
                                <select class="selectpicker" name="sporte">
                                  <option>Futboll</option>
                                  <option>Basketboll</option>
                                  <option>Volejboll</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="vendodhja">Vendodhja: </label>
                                <input type="text" class="form-control" name="vendi" value="">

                              </div>
                              <div class="form-group">
                                <label for="data">Data: </label>
                                <input type="date" name="dita" value="">
                              </div>
                              <div class="form-group">
                                <label for="ora">Ora:</label>
                                <input type="time" name="ora" value="">
                              </div>
                              <div class="form-group">
                                <label for="pjsmrrs">Numri i pjesemarresve</label>
                                <input type="number" name="minlojtar" value="" >
                              </div>


                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" name="button">Mbyll</button>
                                <input type="submit" class="btn btn-primary" name="submit" value="Posto">
                              </div>
                            </form>

                </div>
              </div>
            </div>
<!-- Modal -->


            <br>
            <div class="postime">
                <table id="myTable" class="table table-hover">
                  <thead>
                    <tr style="font-size: 17px;">
                      <th>Username</th>
                      <th>Sporti</th>
                      <th>Vendi</th>
                      <th>Data</th>
                      <th>Ora</th>
                      <th>Pjesemarresit</th>

                      <th></th>
                    </tr>
                  </thead>
                  <tbody >
                    <?php include_once('shfaqpostime.php') ?>
                  </tbody>
                </table>

            </div>
            </div>

          </div>
        </div>
      </div>

  </body>
</html>
