
<?php
include('connect.php');
$name=$_POST['name'];
$pass=$_POST['password'];
$q="select * from hostel";
$res=mysqli_query($con,$q);
while($r=mysqli_fetch_array($res))
{
	if($name == $r['Regno'] && $pass == $r['password'])
	{?>
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
	 <table class="table table-bordered">
	
<body style="background-color:blanchedalmond">   
	<div class="container">
    <thead>
      <tr>
        <th>RegdNo</th>
			<th>Name</th>
			<th>Father Name</th>
			<th>Branch</th>
			<th>Year</th>
			<th>Room NO:</th>
      </tr>
    </thead>
    <tbody>
	<?php
			
			$sql="select * from hostel where Regno = '$name'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
			?>
			<tr>
			<td><?php echo $row['Regno'];?></td>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['fathername'];?></td>
			<td><?php echo $row['branch'];?></td>
			<td><?php echo $row['year'];?></td>
			<td><?php echo $row['room'];?></td>
		
			</tr>
			<?php
			
		}	
		?>
 
 </div>
 </tbody>
 </table>
<?php
	}else{
		
		echo"";
		
		
	}
	
	}
?>
<center>
<a href="download.php"><button type="button" class="btn btn-success">DOWNLOAD</button></a>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
		
</body>
</html>
