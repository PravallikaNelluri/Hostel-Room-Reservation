<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="style3.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-dark navbar-light py-3">
	<span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars" style="font-size:30px;color:lightblue"></i></span>
	<a class="navbar-brand text-info" style="padding-left:150px" href="#"><b>DHANSIRI GIRLS HOSTEL</b></a>
	<a class="nav-item nav-link text-info"  href="index.html"><i class="fa fa-home"></i> Home</a>
	</nav>
	<br>
	<br>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="login1.php"><i class="fa fa-users"></i> User Login</a>
	<a href="login.php"><i class="fa fa-user"></i> Admin Login</a>
  
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 px-4 pb-5">	
		
						

						<div class="container">
						<div class="row justify-content-center">
	
		<div class="col-lg-8 px-4 pb-4">
								<h2 class="page-title text-info">User Login </h2>
								<br>
								<br>
								<form class="form-submit" method="POST" action="hash.php">
									<label for="" class="text-uppercase text-sm"><b>REGISTRATION NUMBER</b></label>
									<input type="text" placeholder="Email" name="name" class="form-control mb">
									<br>
									<label for="" class="text-uppercase text-sm"><b>Password</b></label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
									<br>
									<input type="submit" class="btn btn-primary btn-block" value="login" >
								</form>
							</div>
						</div>
						<div class="text-center text-dark">
							<a href="" class="text-danger"><u style="padding-left:200px">FORGOT PASSWORD</u></a>
						</div>
					</div>
				</div>
						</div>
							</div>
						</div>
					</div>	
						</div>
</body>
</html>

