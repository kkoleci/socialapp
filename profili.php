<?php
session_start();
 Include('db.php');
  


?>


<html>

<head>
    <link href="style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- 
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>
 -->

 <script src="jquery-3.1.1.min.js"></script>

<script> 
// $(document).ready(function(){
//     $(".ajaxi").click(function(){
//         $("#div1").load("ajax.html");
//     });
// });
$(document).ready(function(){
    $("#buton").click(function(){
        $("#animate").animate({
            left: '250px',
            opacity: '0.5',
            height: '150px',
            width: '150px'
        });
    });
});

$(document).ready(function(){
    $("#buton1").click(function(){
        $("#table").slideToggle("slow");
    });
});
</script>
</head>
<body>




<nav class="navbar navbar-default navbar-static-top">
    <div id="ndryshimi" class="container-fluid">
        <div class="navbar-header">
           <div class = "alert alert-info"><a class = "btn btn-success" href = "/Project_Social_Network/kryesimi.php"><span class = "glyphicon glyphicon-hand-left"></span> Back</a>
           </div>
           
          
          
          

        </div>
    </div>
</nav>
<h3> <div class="container">
<a align="center" href="#" style="color:#e74c3c;">Miresevini, <?php echo $_SESSION['username']; ?>
    <div class="page-header"></h3>
    
        <div class = "form-group">
                
            

            <button  id="buton1" type="submit" class = " ajaxi btn btn-success" style="margin-left: 670px;" value ="dergo " name="dergo" ><span class = "glyphicon glyphicon-send"></span>&nbsp; Tirana argetohet</button>

            <div id="div1">
            
             </div>
             </form>
    </div>


<div class="container">
    <div class="row">
    <?php 
    
    $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $datelindja = $_SESSION['datelindja'];
  $gjinia = $_SESSION['gjinia'];
       // $likes = $_SESSION['likes'];
       // $pershkrimi = $_SESSION['pershkrimi'];
      //  $postime = $_SESSION ['postime'];
      //  $shoket = $_SESSION['shoket'];
  $foto = $_SESSION['image'];
         
         ?>
        <div class="col-sm-2 col-md-2">
            <img src="<?php echo $foto; ?>"
            alt="ska" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p><? echo $username; ?></p> <small><cite title="Source Title">Tirane,Albania <i class="glyphicon glyphicon-map-marker"></i></cite></small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> <?php echo $email;  ?>
              <br/> <i class="glyphicon glyphicon-globe"></i> <?php echo $gjinia; ?></p>
                <br /> <i class="glyphicon glyphicon-gift"></i> <?php echo $datelindja; ?></p>




              <!-- <br /> <i class="glyphicon glyphicon-gift"></i> <?php echo $likes; ?></p><br /> <i class="glyphicon glyphicon-gift"></i> <?php echo $postime; ?></p><br /> <i class="glyphicon glyphicon-gift"></i> <?php echo $shoket; ?></p> -->
        </div>

        <div class="col-sm-2 col-md-2">
           
           <h3 align="center">Postimet tuaja</h3>

 <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>Postimi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th>Tipi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Vendi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Dita&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Ora&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Min_Lojtar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Pjestar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

              </tr>
          </thead>
          <tbody>
            <?php
            $email = $_SESSION['email'];
            $qu = "SELECT * FROM postime where email = '$email'";
              $query = mysqli_query($conn, $qu) or die(mysql_error());


           // printf("Affected rows (UPDATE): %d\n", $conn->affected_rows);

              if(!$query)
              {?>
                <div class="col-xs-12">
                <div class="alert alert-warning">
                    <span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
                </div>
                </div>
                <?php
              

              }
              else
              {
              while($f_query = mysqli_fetch_array($query))
              {
            ?>
            <tr>
              <td><?php echo $f_query['post_id']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><?php echo $f_query['tipi']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['vendi']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['dita']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['ora']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['minLojtar']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['email']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['pjestar']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                
            </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
        <br>

        </div>
        <div class="col-sm-2 col-md-4" style="text-align: right">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <a href="editimi.php?email=<?php echo $_SESSION['email'] ?>" value ="<?php echo $_SESSION['email']?>" type="submit"  style="align: left;" class = "btn btn-success"  value ="dergo" name="dergo" ><span class = "glyphicon glyphicon-send"></span>&nbsp; Edit</a>
            
        </div>
    </div>
</div>
<!--<button  id="buton" type="submit" class = " ajaxi btn btn-success" style="margin-left: 200px;" value ="dergo " name="dergo" ><span class = "glyphicon glyphicon-send"></span>&nbsp; Animacion</button>
<div id="animate" style="background:#98bf21;height:100px;width:100px;position:absolute;"></div>
-->
</body>
</html>