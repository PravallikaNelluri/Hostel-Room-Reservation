<?php
include('connect.php');
error_reporting(0);
	$file=$_FILES['main']['name'];
	$tmp_name=$_FILES['main']['tmp_name'];
	$query="insert into upload values('','$file')";
	$res = mysqli_query($con,$query);
	if(move_uploaded_file($tmp_name,$file))
	{
		echo"";	
		header("Refresh:1;url=registration.php");
		
	}
	else
	{
		echo "";
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-dark navbar-light py-2">

        
        <a class="navbar-brand text-info" style="padding-left:50px" href="#"><b>Dhansiri Girls Hostel</b></a>
        <div class="collapse navbar-collapse" id="Expandme">
            <div class="navbar-nav">
            
            </div>
        </div>
			<ul class="nav-item dropdown">
			<br>
			    <a href="#" class="nav-link dropdown-toggle text-warning" id="navbarDropdown" role="button" data-toggle="dropdown"><i class="fa fa-user-circle"></i><b> Account</b></a>
				<div class="dropdown-menu bg-dark" >
				   <a class="dropdown-item text-warning" href="index.html">My Account</a>
				   <a class="dropdown-item text-warning" href="logout.php">Log Out</a>
		
				</div>
			</ul>
			</div>
	    </div>
	</nav>
	

	
<div class="container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
			<br><br>
				<h3 class="text-center">UPLOAD IMAGE</h3>
				<form class="my-5" method="POST" enctype="multipart/form-data">
					<input type="file" name="main" class="form-control" >
					<br><br>
					<input type="submit" name="upload" value="UPLOAD" class="btn btn-success"> 
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>


