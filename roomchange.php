<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="StyleSheet" href="style3.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark navbar-light py-2">

        <br><br><br>
        <a class="navbar-brand text-info" style="padding-left:50px" href="#"><h4><b>Dhansiri Girls Hostel</b></h4></a>
		<br>
		</nav><br><br>


		<div class="container">
			<form action="" method="POST">
			<br><br><br><br>
			<input type="text" name="Room"  placeholder="Room No" >
			<input type="text" name="year"  placeholder="Year" >
				<input type="text" name="reg"  placeholder="Registration No" >
			<button class="btn btn-success" name="search">Change Room</button>
			
			</form>
			
			<div id="roomdiv">

</div>
</div>
			<br>
			<script>
			let p = [];
			</script>
			<?php
			include('connect.php');
		if(isset($_POST['search']))
		{
			
			$Room=$_POST['Room'];
			$year=$_POST['year'];
			$reg=$_POST['reg'];
		
		
			$query = "select * from hostel";
            $results = mysqli_query($con,$query);
			$row_count=mysqli_num_rows($results);
			while($row = mysqli_fetch_array($results)){
			     if($row['year']==$year){?>
		       <script>p.push(<?php echo $row['room']?>)</script>
	          <?php
	           }
               } ?> 
			   
			   <script>
			let room = <?php echo $Room?>;
			let year = <?php echo $year?>;
			let reg1 = "<?php echo $reg?>";
			</script>
			
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
				text2.value = reg1;
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
				text2.value = reg1;
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
				text2.value = reg1;
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
				text2.value = reg1;
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
			
		<?php } ?>
		
		
		
		
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
		