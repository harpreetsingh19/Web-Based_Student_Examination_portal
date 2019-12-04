	<?php

	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="stud";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);
	if(mysqli_connect_error()){
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$select="select * from testdata ORDER BY name";
		$data=mysqli_query($conn,$select);
		$total=mysqli_num_rows($data);

		
	}
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Records</title>
		<style type="text/css">
			body{
				margin: 0;
				padding: 0;
				font-family: sans-serif;
				background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
			}
			.record{
				position: absolute;
				top:20%;
				left:10%;
				font-size: 20px;
				color: white;

			}
			.header{
				position: absolute;
				top:12%;
				left:10%;
				font-size: 20px;
				color: #b6b9f0;
			}
			.para{
				font-size: 25px;
				position: absolute;
				top: 5%;
				left: 30%;
				color: #5ab874;
			}
			.logo{
		
		position: absolute;
		top:0%;
		left:2%;
		width:20%;
		height: 12%;
	}

		</style>
	</head>
	<body>

	<img class="logo" src="logo_o.png">

		<div class="para"><p>Here are all records of students who apeared the Exam.</p></div>
		<div class="header"><h3>NAME => MARKS</h3></div>
		<div class="record">
		<?php

			if($total!=0){
			while ($result=mysqli_fetch_assoc($data)) 
				{
				echo $result['name']." => ".$result['marks']."<br>";
				}
			}
			else{
			echo "NO record found";
			}
		?>
		</div>
	</body>
	</html>