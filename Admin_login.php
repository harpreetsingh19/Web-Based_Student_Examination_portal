<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<style type="text/css">
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.user_pass{
		width: 40%;
		position: absolute;
		top:60%;
		left:10%;
		padding: 10px 8px;
		font-size: 25px;
		background:rgba(0,0,0,0.3);
		border-radius: 12px;
		box-sizing: border-box;
		color: #d6d9ff;
		}
		.user_pass input{
			border:none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width:100%;
			float:center;
			border-bottom: 0.2px solid black;
		}
		.btn{
			border-bottom: none;
			cursor: pointer;
			padding: 5px;
		}
		.para{
			position: absolute;
			top:30%;
			left:10%;
			padding: 2% 4%;
			padding-bottom: 5%;
			color: white;
			background: url(info.png);
			background-size:cover;
		}
		.para a{
			color: yellow;
		}
		.admin_img{
			position: absolute;
			top:5%;
			left: 10%
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

	<img class="admin_img" src="admin.png">

	<form action="connect_admin.php" method="post">
		<div class="user_pass">
			<input type="text" placeholder="Admin username" name="admin" required><br>
			<input type="password" placeholder="Enter Password Provided" name="Password" required><br>
			<input class="btn" type="submit" value="LOGIN">
		</div>
	</form>
	<div class="para">
		<p>This is a admin login site wher  admin can login and set questions and there reoective ans for the test matters</p>
		<p>If u are not the admin  then please vist our <a href="login.php">Student Login page</a></p>
	</div>
</body>
</html>