<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  	<script src="js/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
		<nav class="navbar nav-tabs navbar-expand-sm navbar-light">
	  
	        <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php"><i class='fas fa-angle-left' style='font-size:27px'></i></a>
		      </li>  
		    </ul>
		
		<a class="navbar-brand mr-auto" href="#">
	    	<label><b><h5>Register</h5></b></label>
	    </a>  
	</nav> 
		<div class="col-sm-12"><br><br>		
			<form action="pregister.php" method="post">
					<input id="nama" class="form-content" type="hidden" name="id" placeholder="id"  />
					<input id="nama" class="form-content" type="text" name="nama" placeholder="Name" required />
				<div class="form-border"></div>	
					<input id="email" class="form-content" type="email" name="email" placeholder="Email"  required />
		  		<div class="form-border"></div>
					<input type="password" name="password" placeholder="Password" id="pwd" class="form-content" required>
					<span toggle="#pwd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
			 	<div class="form-border"></div>
			 		<input id="repwd" class="form-content"  type="password"  placeholder="Re-enter Password" name="re_password" required />
			 		<span toggle="#repwd" class="fa fa-fw fa-eye field-icon toggle-repassword"></span>
			 	<div class="form-border"></div>
			 	<label style="color: #737373;">Birthday</label>
			 	<input type="date" name="tgl" class="form-content" data-date="" data-date-format="yyyy-mm-dd">
			 	<div class="form-border"></div><br>
			 	<a href="index.php"type="button" class="btn btn-light btn-sm" style="width: 90px; color:#ff4000; background:#ffffff ">Back</a>
			 	<input  class="float-right" type="submit" name="register" value="Register" style="width:90px; background:#ff4000; border-radius: 4px; border: #ffffff; color: #ffffff; " /> 	
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.toggle-password, .toggle-repassword').on('click', function() {
  $(this).toggleClass('fa-eye fa-eye-slash');
  let input = $($(this).attr('toggle'));
  if (input.attr('type') == 'password') {
    input.attr('type', 'text');
  }
  else {
    input.attr('type', 'password');
  }
});
</script>
</body>
</html>