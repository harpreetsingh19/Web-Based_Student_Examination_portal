<?php
	
	session_start();
	
	$code=$_POST['code'];

	$a1=$_POST['a1'];
	$a2=$_POST['a2'];
	$a3=$_POST['a3'];
	$a4=$_POST['a4'];
	$a5=$_POST['a5'];
	$email=$_POST['email'];
	$name=$_POST['name'];

	$count=0;

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
		$select="select ca1,ca2,ca3,ca4,ca5 from adminquestionanswer where sub='$code' ";
		$result= mysqli_query($conn,$select);
		$row= mysqli_fetch_assoc($result);

		if($a1==$row['ca1']){
			$count++;
		}
		if($a2==$row['ca2']){
			$count++;
		}
		if($a3==$row['ca3']){
			$count++;
		}
		if($a4==$row['ca4']){
			$count++;
		}
		if($a5==$row['ca5']){
			$count++;
		}

		$insertcount="INSERT INTO testdata(name,marks,email) values(?,?,?)";
		

			$stmt=$conn->prepare($insertcount);
			$stmt->bind_param("sis",$name,$count,$email);
			$stmt->execute();
			$stmt->close();


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.bg{
			background: rgba(0,0,0,0.4);
			position: relative;
			top: 0%;
			left: 0%;
			padding: 24.5%;
			padding-left:75.5%;
			text-align: center;
			justify-content: center;
		}
		.marks{
			position: absolute;
			top:50%;
			left: 40%;
			color: #adede4;
			font-size: 300%;
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

	<div  class="bg">
<div class="marks">
		<?php 
		echo " You have got '$count' ";
		?>
</div>
	</div>
</body>
</html>