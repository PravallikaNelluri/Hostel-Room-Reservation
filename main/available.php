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
		 
           
                <a class="nav-item nav-link text-warning" href="new.php"><i class="fa fa-home"></i> Home</a>
				
            
		<br>
		</nav><br><br>
<script>
let p = [];
</script>

	<?php 
	include('connect.php');
$query = "select * from hostel";
$results = mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
	
	while($row = mysqli_fetch_array($results)){
	             if($row['year']==1){?>
		       <h3><script>p.push(<?php echo $row['room']?>)</script></h3>
	          <?php
	           }
               } ?> 
			   <html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style3.css">
</head>
<body>
			   <h1>Year 1</h1>
			   <div id="roomdiv1">

</div>
<script>
const divClass = document.querySelector('#roomdiv1');
			for(let i=201;i<226;i++){
				const form1 = document.createElement('form');
				form1.classList.add('reserve');
				form1.method = "POST"
				form1.action = "update.php"
				const btn = document.createElement('BUTTON');
				btn.innerText = i;
				btn.classList.add('room');
				btn.disabled=true;
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
			} 
		
			}
			</script>
			
			<hr>
				   <h1>Year 2</h1>
			   <div id="roomdiv2">

</div>
<script>
let q = [];
</script>
<?php
$query = "select * from hostel";
$results = mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
while($row = mysqli_fetch_array($results)){
	             if($row['year']==2){?>
		       <h3><script>q.push(<?php echo $row['room']?>)</script></h3>
	          <?php
	           }
               } ?> 
			   	   <script>
console.log(q);
</script>
			<script>
const divClass2 = document.querySelector('#roomdiv2');
			for(let i=301;i<326;i++){
				const form2 = document.createElement('form');
				form2.classList.add('reserve');
				form2.method = "POST"
				form2.action = "update.php"
				const btn2 = document.createElement('BUTTON');
				btn2.innerText = i;
				btn2.classList.add('room');
				btn2.disabled=true;
				form2.appendChild(btn2);
				divClass2.appendChild(form2);
				let ans=0;
		    for(let s = 0;s<q.length;s++){
				if(q[s]===i) ans++;
			}
			if(ans===1){
				btn2.classList.add('yellow')
			}else if(ans===2){
				btn2.classList.add('pink')
			}else if (ans===3){
				btn2.classList.add('blue')
			}else if(ans>=4){
				btn2.classList.add('red')
			} 
		
			}
			</script>
				<hr>
				   <h1>Year 3</h1>
			   <div id="roomdiv3">

</div>
<script>
let a = [];
</script>
<?php
$query = "select * from hostel";
$results = mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
while($row = mysqli_fetch_array($results)){
	             if($row['year']==3){?>
		       <h3><script>a.push(<?php echo $row['room']?>)</script></h3>
	          <?php
	           }
               } ?> 
			   <script>
console.log(a);
</script>
			<script>
const divClass3 = document.querySelector('#roomdiv3');
			for(let i=401;i<426;i++){
				const form3 = document.createElement('form');
				form3.classList.add('reserve');
				form3.method = "POST"
				form3.action = "update.php"
				const btn3 = document.createElement('BUTTON');
				btn3.innerText = i;
				btn3.classList.add('room');
				btn3.disabled=true;
				form3.appendChild(btn3);
				divClass3.appendChild(form3);
				let ans=0;
		    for(let s = 0;s<a.length;s++){
				if(a[s]===i) ans++;
			}
			if(ans===1){
				btn3.classList.add('yellow')
			}else if(ans===2){
				btn3.classList.add('pink')
			}else if (ans===3){
				btn3.classList.add('blue')
			}else if(ans>=4){
				btn3.classList.add('red')
			} 
		
			}
			</script>
				<hr>
				   <h1>Year 4</h1>
			   <div id="roomdiv4">

</div>
<script>
let b = [];
</script>
<?php
$query = "select * from hostel";
$results = mysqli_query($con,$query);
$row_count=mysqli_num_rows($results);
while($row = mysqli_fetch_array($results)){
	             if($row['year']==4){?>
		       <script>b.push(<?php echo $row['room']?>)</script>
	          <?php
	           }
               } ?> 
			      	   <script>
console.log(b);
</script>
			<script>
const divClass4 = document.querySelector('#roomdiv4');
			for(let i=501;i<526;i++){
				const form4 = document.createElement('form');
				form4.classList.add('reserve');
				form4.method = "POST"
				form4.action = "update.php"
				const btn4 = document.createElement('BUTTON');
				btn4.innerText = i;
				btn4.classList.add('room');
				btn4.disabled=true;
				form4.appendChild(btn4);
				divClass4.appendChild(form4);
				let ans=0;
		    for(let s = 0;s<b.length;s++){
				if(b[s]===i) ans++;
			}
			if(ans===1){
				btn4.classList.add('yellow')
			}else if(ans===2){
				btn4.classList.add('pink')
			}else if (ans===3){
				btn4.classList.add('blue')
			}else if(ans>=4){
				btn4.classList.add('red')
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
 
			
			</body>
</html>