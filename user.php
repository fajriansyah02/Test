
<?php
		session_start();
		if(ISSET($_SESSION['email'])){
		include"koneksi.php";
?>

<?php

include_once("koneksi.php");


$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>

	<title>INDEX</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="DataTable/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="DataTable/media/css/dataTables.bootstrap.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="DataTable/media/js/jquery.dataTables.js"></script>
	
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
		.navbar-brand > img{
			align-items:  center;

		}
	</style> 
</head>
<body>

	<nav class="navbar nav-tabs navbar-expand-sm navbar-light">
	  
	        <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index2.php"><i class='fas fa-angle-left' style='font-size:27px'></i></a>
		      </li>  
		    </ul>
		
		<a class="navbar-brand mr-auto" href="#">
	    	<label><b>User List</b></label>
	    </a>  
	</nav>
	 <br>
<div class="container">	 
	<div class="table-responsive">
		<table class="table table-bordered table-striped  data">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Birthday</th>
				</tr>
			</thead>
			<tbody>
				<?php  
			    while($data = mysqli_fetch_array($result)) {         
			        echo "<tr>";
			        echo "<td>".$data['id']."</td>";
			        echo "<td>".$data['nama']."</td>";
			        echo "<td>".$data['email']."</td>";
			        echo "<td>".$data['tgl_lahir']."</td>";    
			        echo "</tr>";        
			    }
			    ?>
			</tbody>
		</table>
		<script type="text/javascript">
			$(document).ready(function(){
			$('.data').DataTable();
			});
		</script>
	</div>
</div>

<?php
		}
?>
</body>
</html>