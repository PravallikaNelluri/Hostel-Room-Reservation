<?php
session_start();
include('connect.php');
error_reporting(0);
if(isset($_POST['Submit'])){
	$email=$_POST['adminname'];
	$opwd=$_POST['opwd'];
	$npwd=$_POST['npwd'];
	$cpwd=$_POST['cpwd'];
	$query="select adminname,password from admins where adminname='$email' and password='$opwd'";
	$result=mysqli_query($con,$query);
$res=mysqli_fetch_array($result);
if($res>0){
	$sql="update admins set password='$npwd' where adminname='$email'";
	$result=mysqli_query($con,$sql);
	$_SESSION['msg1']="password changed successfully";
}else{
	$_SESSION['msg1']="password doesnot match";	
}
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
   <link rel="stylesheet" href="style3.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg  bg-dark navbar-light py-3">
	<span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars" style="font-size:30px;color:lightblue"></i></span>
	<a class="navbar-brand text-info" style="padding-left:150px" ><b>DHANSIRI GIRLS HOSTEL</b></a>
	
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
								<h2 class="page-title">Change Password</h2>
								<br>
								<br>
								<form class="form-submit" action="" method="POST" onSubmit="return valid();">
									<label for="" class="text-uppercase text-sm">Email ID</label>
									<input type="text" placeholder="Email" name="adminname" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Old Password</label>
									<input type="password" placeholder="Old Password" name="opwd" class="form-control mb">
									<label for="" class="text-uppercase text-sm">New Password</label>
									<input type="password" placeholder="New Password" name="npwd" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Confirm Password</label>
									<input type="password" placeholder="Confirm Password" name="cpwd" class="form-control mb">
									<br>
									<input type="submit" class="btn btn-danger btn-block" name="Submit" value="change password" >
								</form>
								
								
<p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?> </p>
<div class="text-center text-dark">
							<a href="login.php" class="text-primary"><u style="padding-left:200px">Back to login page</u></a>
						</div>


							</div>
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
	
	
						
						

