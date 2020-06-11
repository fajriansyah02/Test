<!DOCTYPE html>
<html>
<head>

	<title>LOGIN</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		#row {
	        background: #ffffff;
	        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
	        table-layout: fixed;
	        height: 100%;
	        margin: 6rem auto 8.1rem auto;
	        width: 100%;
		}
		a {
		    text-decoration: none;
		}
		label {
		    font-family: "Raleway", sans-serif;
		    font-size: 11pt;
		}
		#forgot-pass {
		    color: #2dbd6e;
		    font-family: "Raleway", sans-serif;
		    font-size: 10pt;
		    margin-top: 3px;
		    text-align: right;
		}
		.form {
		    align-items: left;
		    display: flex;
		    flex-direction: column;
		}
		.form-border {
		    background: -webkit-linear-gradient(right, #009999, #009999);
		    height: 2px;
		    width: 100%;
		}
		.form-content {
		    background: none;
		    border: none;
		    outline: none;
		    padding-top: 14px;
		}
	</style>
</head>
<body>


<?php 
	include ('koneksi.php');
	session_start();
	
	if(isset($_POST['login'])) {
		$email 			= $_POST['email'];
		$password 	    = $_POST['password'];
		$koneksi	 	= mysqli_connect("localhost","root","","bismillah");
		$sql 			= mysqli_query($koneksi,"SELECT * FROM user WHERE email='$email' AND password='$password'");
		
	
	if(mysqli_num_rows($sql)==1){
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
?>
	<script language="javascript">
	document.location=('index2.php')</script>
<?php
	}
	
	else{
		echo "<div class='col-sm-4'><div id='row'><p align='center'>Either your email/password is incorrect <br> Please try again<a href='index.php' type='button'  class='btn btn-light btn-sm float-right' style='width:100%; background:#ff4000; border-radius: 4px; border: #ffffff; color: #ffffff;''>Ok</a> </p></div></div>";
	}
	}
?>

</body>
</html>