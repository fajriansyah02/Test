<!DOCTYPE html>
<html>
<head>

	<title>LOGIN</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
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
    if(isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $psw = $_POST['password'];
        $repsw = $_POST['re_password'];
        $tgl = $_POST['tgl'];

        include_once("koneksi.php");
        if ($psw == $repsw) {

        	$result = mysqli_query($mysqli, "INSERT INTO user(id,nama,email,password,tgl_lahir) VALUES('','$nama','$email','$psw','$tgl')");
		        if ($result) {
		        echo "<br><div class='alert alert-dark'> <strong>Register Success,  </strong> <a href='index.php' class='alert-link'>Back</a>. </div>";
		   		} else {
		        echo "<div class='col-sm-4'><div id='row'><p align='center'>Register error, please cek the data</p><a href='register.php' type='button'  class='btn btn-light btn-sm float-right' style='width:100%; background:#ff4000; border-radius: 4px; border: #ffffff; color: #ffffff;''>Ok</a> </div></div>";
		    	}
        }
        else {
        echo "<div class='col-sm-4'><div id='row'><p align='center'>Register error, please cek the data</p><a href='register.php' type='button'  class='btn btn-light btn-sm float-right' style='width:100%; background:#ff4000; border-radius: 4px; border: #ffffff; color: #ffffff;''>Ok</a> </div></div>";
   		}   
	}
?>	

</body>
</html>