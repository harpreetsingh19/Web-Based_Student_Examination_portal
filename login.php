<html>
<head>
<title> LOGIN</title>
<style type="text/css"> 
	@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
	body {
		margin:0;
		padding:0;
		font-family:sans-serif;
		background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		
	.main{
		width: 300px;
		position:absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		color: white;
		background:rgba(0,0,0,0.1);
		border-radius: 10px;
		padding:20px 15px;
	}
	.main h1{
		float:center;
		font-size: 40px;
		border-bottom: 5px solid #4caf40;
		margin-bottom: 40px;
		padding:10px 0;
		
	}
	.textbox{
		width:100%;
		overflow:hidden;
		padding:5px 0;
		border-bottom:1px solid white;
	}
	.textbox input{
		border:none;
		outline:none;
		background:none;
		color:white;
		margin:10px 0;
		float:left;
	}
	.btn{
		width:100%;
		background: none;
		border:1px solid #3C1C78;
		color:white ;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		margin: 12px 0;
	}
	.registration{
		color: #bfdec2;
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

<form action ="connect_studentlogin.php" method="post">
<div class="main">
<h1>LOGIN</h1>
<div class="textbox">
<input type="text" placeholder="Enter username"name="username"><br>
</div>
<div class="textbox">
<input type="password" placeholder="Enter password"name="password"><br>
<br>
</div>
<input class="btn" type="submit" value="SIGN IN" >
<br><br>
NOT having a account!!!<br>
Don't be sad<br>
<a class="registration" href="registration.php">REGISTRATION</a>
</div>
</form>
</body>
</html>