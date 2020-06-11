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
	        height: 500px;
	        margin: 6rem auto 8.1rem auto;
	        width: 329px;
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
<div class="container">
	<div id="row">
		<div class="col-sm-12">
		<img class="img-fluid mx-auto d-block"  src="gambar/logo.png" width="400" height="70">	
	<form action="plogin.php" method="post">
			<input id="email" class="form-content" type="email" name="email" placeholder="Email" autocomplete="on" required />
  		<div class="form-border"></div>
			<input id="password" class="form-content" type="password" placeholder="Password" name="password" required />
	 	<div class="form-border"></div><br>
	 	<input  type="submit" name="login" value="Login" style="width:100%; background:#ff4000; border-radius: 4px; border: #ffffff; color: #ffffff; " /><br><br>
	 	<a href="register.php" type="button" class="btn btn-light btn-sm" style="width: 100%; color:#ff4000; background:#ffffff"> Register</a>
	</form>
			
		</div>
	</div>
</div>
</body>
</html>