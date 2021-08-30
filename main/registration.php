<?php
include('connect.php');

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
	
	
<form name="form" class="form-group m-auto" method="POST" action="reserve.php">
	<div class="row">
		<div class="col">
		<h3 style="text-align:center">REGISTRATION FORM</h3>
		  
	</div>	
	</div>
   
	<div class="col-md-6 m-auto">
		<h6>REG NO:</h6>
		<input type="text" class="form-control" placeholder="REG NO" name="Regno" required>
	</div>
	<br>
	<div class="col-md-6 m-auto">
		<h6>NAME </h6>
		<input type="text" class="form-control" placeholder="Name" name="name" required>
	</div>
	<br>
	<div class="col-md-6 m-auto">
		<h6>FATHER NAME:</h6>
		<input type="text" class="form-control" placeholder="Father Name" name="fathername" required>
	</div>
	<br>
	<div class="col-md-6 m-auto">
		<h6>BRANCH </h6>
	    <select name="branch" id="branch" class="form-control">
		<option value="IT">IT</option>
		<option value="CSE">CSE</option>
		<option value="ECE">ECE</option>
		<option value="MECH">MECH</option>
		<option value="EEE">EEE</option>
		<option value="CIVIL">CIVIL</option>
	    </select>
	</div>
	<br>
	<div class="col-md-6 m-auto">
		<h6> YEAR </h6>
	    <select name="year" id="year" class="form-control" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	    </select>
		
	</div>


	<br>
   
    <div class="row">
	<div class="col-md-6 m-auto">
		<input type="submit" class="form-control" value="RESERVE" name="submit" style="background-color:red">
        </div>	
    </div>
	
</form> 
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>