<?php
session_start();

include_once('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title> Register,</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="/jquery-3.1.1.min.js"></script>
		
	<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>




<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
	  	<div class="navbar-header">
	  		<a href="http://localhost/Project_Social_Network/home.html" class="navbar-brand">Tirana Argetohet</a>
	  	</div>
	  
	</div>
</nav>


<div style="margin:80px auto 0;text-align: center;">
	<img src="/logo.jpg" style="width:200px;">
</div>
<?php
          if(isset($_GET['email']))
            {
            $acc_query = mysqli_query($conn, "SELECT * FROM perdoruesi WHERE email = '$_GET[email]'") or die(mysql_error());
            $acc_fetch = mysqli_fetch_array($acc_query);
                      ?>

<form method="POST" action="edit.php?email=<?php echo $acc_fetch['email']?>" enctype = "multipart/form-data" >


	<div class="form-group">
		<label>Full Name</label>

		<input type="text" name="username" value="<?php echo $acc_fetch['username']?>" class="form-control textInput">
		<input  id = "email" type = "hidden"  name = "email" value = "<?php echo $acc_fetch['email']?>" class = "form-control" />
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $acc_fetch['email']?>" class="form-control textInput">
	</div>
	
	<div class="form-group">
		<label>Choose Photo</label>
		<input type="hidden" name="pass" class="form-control textInput" value = "1000000">
		<input type="file" name="foto" class="form-control textInput" >
	</div>

	<div class="row">
		

     <button type="submit" href="edit.php?email=<?php echo $acc_fetch['email']?>" class = "btn btn-success"  value="Save Changes" name="login" > Save Changes</button>
	</div>




</form>
<?php }

 ?>
</body>
</html>