<?php include("connect.php");
error_reporting(0);
$Regno=$_POST['Regno'];
$name=$_POST['name'];
$fathername=$_POST['fathername'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$stm="select year from hostel where year='$year'";
$que=mysqli_query($con,$stm);
$res=mysqli_fetch_array($que);
$query = "select * from hostel";
$results = mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
$res="insert into hostel values('$Regno','$name','$fathername','$branch','$year','','$Regno')";
$query=mysqli_query($con,$res);
if($query)
{
	echo '';
}
else{
	echo "not inserted";
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style3.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark navbar-light py-2">

        <br><br><br>
        <a class="navbar-brand text-info" style="padding-left:50px" href="#"><h4><b>Dhansiri Girls Hostel</b></h4></a>
		<br>
		</nav><br><br>
<h4 class="text-danger" style="padding-left:50px" ><b>Room Booking</b></h4>
<br>
<h4 class="text-dark" style="padding-left:50px" > <u>Year : <?php echo $year;?></u></h3>
<br>
<br>
<br>
<div id="roomdiv">

</div>

<script>
let p = [];
let reg = "<?php echo $Regno?>";
let year = <?php echo $year;?>;
</script>
	<?php while($row = mysqli_fetch_array($results)){
	             if($row['year']==$year){?>
		       <h3><script>p.push(<?php echo $row['room']?>)</script></h3>
	          <?php
	           }
               } ?> 
		

			<script type='text/javascript'>
			const divClass = document.querySelector('#roomdiv');
			if(year===1){
			for(let i=201;i<226;i++){
				const form1 = document.createElement('form');
				form1.classList.add('reserve');
				form1.method = "POST"
				form1.action = "update.php"
				const text1 = document.createElement('input');
				text1.type="hidden";
				text1.value = i;
				text1.name="RoomNo";
				const text2 = document.createElement('input');
				text2.type="hidden";
				text2.value = reg;
				text2.name="RegNo";
				const btn = document.createElement('BUTTON');
				btn.innerText = i;
				btn.classList.add('room');
				form1.appendChild(text1);
				form1.appendChild(text2);
				form1.appendChild(btn);
				divClass.appendChild(form1);
				let ans=0;
		    for(let s = 0;s<p.length;s++){
				if(p[s]===i) ans++;
			}
			if(ans===1){
				btn.classList.add('yellow')
			}else if(ans===2){
				btn.classList.add('pink')
			}else if (ans===3){
				btn.classList.add('blue')
			}else if(ans>=4){
				btn.classList.add('red')
				btn.disabled=true;
			} 
		
			}
}

	      else if(year===2){
			for(let i=301;i<326;i++){
				const form1 = document.createElement('form');
				form1.classList.add('reserve');
				form1.method = "POST"
				form1.action = "update.php"
				const text1 = document.createElement('input');
				text1.type="hidden";
				text1.value = i;
				text1.name="RoomNo";
				const text2 = document.createElement('input');
				text2.type="hidden";
				text2.value = reg;
				text2.name="RegNo";
				const btn = document.createElement('BUTTON');
				btn.innerText = i;
				btn.classList.add('room');
				form1.appendChild(text1);
				form1.appendChild(text2);
				form1.appendChild(btn);
				divClass.appendChild(form1);
				let ans=0;
		    for(let s = 0;s<p.length;s++){
				if(p[s]===i) ans++;
			}
			if(ans===1){
				btn.classList.add('yellow')
			}else if(ans===2){
				btn.classList.add('pink')
			}else if (ans===3){
				btn.classList.add('blue')
			}else if(ans>=4){
				btn.classList.add('red')
				btn.disabled=true;
			} 
		
			}
			
}

	   else if(year===3){
			for(let i=401;i<426;i++){
				const form1 = document.createElement('form');
				form1.classList.add('reserve');
				form1.method = "POST"
				form1.action = "update.php"
				const text1 = document.createElement('input');
				text1.type="hidden";
				text1.value = i;
				text1.name="RoomNo";
				const text2 = document.createElement('input');
				text2.type="hidden";
				text2.value = reg;
				text2.name="RegNo";
				const btn = document.createElement('BUTTON');
				btn.innerText = i;
				btn.classList.add('room');
				form1.appendChild(text1);
				form1.appendChild(text2);
				form1.appendChild(btn);
				divClass.appendChild(form1);
				let ans=0;
		    for(let s = 0;s<p.length;s++){
				if(p[s]===i) ans++;
			}
			if(ans===1){
				btn.classList.add('yellow')
			}else if(ans===2){
				btn.classList.add('pink')
			}else if (ans===3){
				btn.classList.add('blue')
			}else if(ans>=4){
				btn.classList.add('red')
				btn.disabled=true;
			} 
		
			}
			
}

	    else if(year===4){
			for(let i=501;i<526;i++){
				const form1 = document.createElement('form');
				form1.classList.add('reserve');
				form1.method = "POST"
				form1.action = "update.php"
				const text1 = document.createElement('input');
				text1.type="hidden";
				text1.value = i;
				text1.name="RoomNo";
				const text2 = document.createElement('input');
				text2.type="hidden";
				text2.value = reg;
				text2.name="RegNo";
				const btn = document.createElement('BUTTON');
				btn.innerText = i;
				btn.classList.add('room');
				form1.appendChild(text1);
				form1.appendChild(text2);
				form1.appendChild(btn);
				divClass.appendChild(form1);
				let ans=0;
		    for(let s = 0;s<p.length;s++){
				if(p[s]===i) ans++;
			}
			if(ans===1){
				btn.classList.add('yellow')
			}else if(ans===2){
				btn.classList.add('pink')
			}else if (ans===3){
				btn.classList.add('blue')
			}else if(ans>=4){
				btn.classList.add('red')
				btn.disabled=true;
			} 
		
			}
			
}
			</script>
			
			
			
			<footer class="page-footer bg-dark">
    <div class="container text-center text-md-left mt-5">
	<div class="row">
	    <div class="col-md-3  mx-auto mb-4">
		<br><br>
		<h6 class="text-warning"> <i class="fa fa-home"></i> HOSTEL ROOMS </h6>
		<br>
		<span class="badge badge-primary"></span>
		    <b style="color:white">
			 <h6><i class='fa fa-square' style='font-size:20px;color:yellow'></i> Filled with ONE bed</h6>
			 <h6><i class='fa fa-square' style='font-size:20px;color:pink'></i> Filled with TWO beds</h6>
			 <h6><i class='fa fa-square' style='font-size:20px;color:blue'></i> Filled with THREE beds</h6>
			 <h6><i class='fa fa-square' style='font-size:20px;color:red'></i> Filled with FOUR beds</h6>
			 
			
			
    

			

		    </b>

	    </div>

	</div>
    </div>
</div>
<br><br><br>
</footer>
 
			
			
			

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

			
</body>
</html>