<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.registration {
		width: 30%;
		position:absolute;
		top: 50%;
		left: 30%;
		transform: translate(-50%,-50%);
		color: white;
		background: rgba(20,150,0,0.3);
		padding: 20px;
		border-radius: 4px;
		}
		h2{
		text-align:center;
		font-size: 50px;
		margin-bottom: 40px;
		padding:10px 0;
		font-family: arial;

		}
		.textbox{
		width:100%;
		overflow:hidden;
		padding:0;
		color: black;
		}
		.textbox input{
			border:none;
			outline: none;
			background: none;
			color: white;
			font-size: 18px;
			width:100%;
			float:center;
			border-bottom: 1px solid black;

		}
		.dropbox{
  position: relative;
  display: block;
  max-width: 100%;
  min-width: 180px;
  margin: 0;
  border: 2px solid #3C1C78;
  background-color: transparent;
  z-index: 10;
}
  
  select{
    border: none;
    outline: none;
    background: transparent;
    appearance: none;
    border-radius: 0;
    margin: 0;
    display: block;
    width: 100%;
    padding: 5px;
    font-size: 14px;
    color: #537680;
			 }

	.btn{
		width:100%;
		background: none;
		border:1px solid #3C1C78;
		color:white;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		margin: 12px 0;
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
	<form  action="connect_registration.php" method="post">
<h2><em><marquee>You are here for registration!!!</marquee></em></h2>
<div class="registration">
<div class="textbox">
<br><input type="text" placeholder="Name" name="name" required><br>
<br><input type="text" placeholder="Age" name="age" required><br>
<br><input type="text" placeholder="Email-ID" name="email" required><br>
<br><input type="text" placeholder="Mobile Number" name="mno" required><br><br>



<!--<input type="radio" name="gender" value="m" required>Male
<input type="radio" name="gender" value="f" required>Female<br>-->
<b>Gender</b><br>
<div class="dropbox">
<select name="gender">
  <option value="n">none</option>
  <option value="m">male</option>
  <option value="f">Female</option>
</select>
</div><br>

<input type="text" placeholder="Desired Username" name="username" required><br><br>
<input type="password" placeholder="Desired Strong Password" name="Password" required><br>
</div>

<input class="btn" type="submit">
	
</form>
</body>
</html>