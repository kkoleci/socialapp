<?php
	
session_start();

include_once('db.php');


	if(isset($_POST['login']) && isset($_GET['email']))
	{
		$emri = $_POST['username'];
		$email = $_POST['email'];

			$target = $_FILES['foto']['name'];
			$image = $_FILES['foto']['name'];


 move_uploaded_file($_FILES['foto']['tmp_name'], $target);


			{

				$co =mysqli_query($conn, "UPDATE perdoruesi SET username = '$emri',email = '$email',image='$image'   WHERE email = '$_GET[email]'") or die(mysql_error());
				if($co)
			{
					echo "<script>alert('Ndryshimet u bene me sukses !')</script>";
					 echo "<script>window.open('profili.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Ndryshimet nuk u bene !!')</script>";
			}
	}
}
?>