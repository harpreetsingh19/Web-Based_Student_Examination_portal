<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal</title>
	<style type="text/css">
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.add_test{
			position: absolute;
			top:60%;
			left: 10%;
			
		}
		.add_test img{
			position: absolute;
			top:50%;
			left:10%;
			width: 200px;
			border-radius: 100px;
		}
		.record{
			position: absolute;
			top:60%;
			left: 30%;
			}
		.record img{
			position: absolute;
			top:50%;
			left:30%;
			width: 200px;
			border-radius: 100px;
		}
		.welcome{
			position: absolute;
			left:10%;
			font-size: 30px;
			color: #a10000;
		}
		.welcome em{
			color: #5e0000;
			font-size: 105%;
			border-bottom: 5px solid black;
		}
		.para{
			position: absolute;
			top:20%;
			left: 10%;
		}
		.logo{
		
		position: absolute;
		bottom:2%;
		right:2%;
		width:20%;
		height: 12%;
	}

	</style>
</head>
<body>
<img class="logo" src="logo_o.png">

	<div class="welcome">
		<h1>Welcome <em><?php echo $_SESSION['user'] ; ?></em> </h1>
	</div>
<div class="para"><em>
	<p>Yahan kuch likhna h what admin can do ....</p>
<em></div>

<div class="start">
	
<a class="add_test" href="add_test.php"><img src="Add test.png"></a>
</div>
<div class="record">
	
<a href="veiw_record.php"><img src="Records.png"></a>
</div>
</body>
</html>