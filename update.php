<?php
include('connect.php');
$RegNo=$_POST['RegNo'];
$room=$_POST['RoomNo'];
$res="update hostel set room='$room' where Regno='$RegNo'";
$query=mysqli_query($con,$res);
if($query)
{
		echo '<script>alert("Booked");</script>';
	header("Refresh:1;url=new.php");
}
else{
	echo "not inserted";
}
?>