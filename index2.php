<?php
		session_start();
		if(ISSET($_SESSION['email'])){
		include"koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>

	<title>INDEX</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  	<script src="js/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
	<!--<style>

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
	</style> -->
	<style>
		form,form .input-icon{width:100%;}
		form .input-icon{position:relative;}
		form input+i{
		  position:absolute;
		  right:  10px;
		  top:15px;
		  color:#777;
		}
 
		form input:focus{border:1px solid #0099ff;color:#000}
		form input:focus+i{color:#0099ff;}
		 
		 
		form>div:last-child{
		  display:inline-block;
		  width:100%;
		}
 
		.carousel-inner > .item > img,
			.carousel-inner > .item > a > img {
			width: 100%;
			height: 50%;
			
			}
		.carousel-item{
			width: 100%;
			height: 200px;
		}
	</style> 
</head>
<body>

	<nav class="navbar nav-tabs navbar-expand-sm navbar-light">
	  
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="user.php">User List</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="logout.php">Logout</a>
		      </li>   
		    </ul>
		</div>
		<a class="navbar-brand mr-auto" href="#">
	    	<img src="gambar/logo.png" width="235" height="32" alt="sentral tukang">
	    </a>  
	</nav><br>

<nav class="navbar nav-tabs navbar-expand-sm navbar-light fixed-bottom">
  <ul class="navbar-nav">
    <li class="nav-item active mr-auto">
      <a class="nav-link" href="user.php"><i class='fas fa-home' style='font-size:24px'></i></a>
    </li>
   </ul>
   <ul class="navbar-nav ml-auto"> 
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class='far fa-user-circle' style='font-size:24px'></i></a>
    </li>
  </ul>
</nav>
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="gambar/logo.png" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="gambar/slide3.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="gambar/slide2.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<br>
<div class="container">
	<form class="form-inline" action="">
	  <div class="input-icon">
    	<input class="form-control mr-sm-2" style="width: 100%;" type="text" placeholder="Search" /> <i class='fas fa-search'></i>
      </div>	
    </form> <br>


<div class="table-responsive">
	<table border="0" width="100%">
		<tr align="center">
			<td width="25%"><i class='fas fa-toolbox' style='font-size:24px'></i></td>
			<td width="25%"><i class='fas fa-wrench' style='font-size:24px'></i></td>
			<td width="25%"><i class='fas fa-cogs' style='font-size:24px'></i></td>
			<td width="25%"><i class='fas fa-shapes' style='font-size:24px'></i></td>
		</tr>
		<tr align="center">
			<td>Material</td>
			<td>Tools</td>
			<td>Fitting</td>
			<td>Other</td>
		</tr>	
	</table>
</div>	
</div>
<?php
		}
?>	 
</body>
</html>