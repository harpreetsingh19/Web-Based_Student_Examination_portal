<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student portal</title>
	<!--<link rel="stylesheet" type="text/css" href="student_portal.css">-->
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;
			
		}
		.testcode{
			padding: 20px;
			position: absolute;
			top: 50%;
			left: 8%;
			background: rgba(0,0,255,0.2);
			border-radius: 40px;
			display: block;
		}
		.testcode input{
			background: none;
			border:none;
			outline: none;
			border-bottom: 2px dotted black;
			width: 100%;
			display: block;
			padding: 10px;
			color: white;
			font-size: 16px;
		}
		.btn{
			border-bottom:none;
			cursor: pointer;
			padding: 5px;
		}
		.img_test{
			position: absolute;
			top: 25%;
			left: 9%;
		}
		.img_test img{
			border-radius: 10px;
		}
		.record{
			position: absolute;
			top:25%;
			left:30%;

		}
		.record img{
			width: 62%;
			height: 62%;
			border:2px dashed black;
			border-radius: 8px;
		}
		.para{
			position: absolute;
			top:60%;
			left: 40%;
			color: #f0f5ae;
		}
		.header{
			font-family: serif;
			font-size: 40px;
			color:grey;
			position: absolute;
			left: 10%;
			top:5%;
		}
		.two{
			position: absolute;
			top:65%;
			left:20%;
		}
		.two img{
			width:50%;
			height: 50%;
			border-radius: 5px;
		}
		.arrow{
			position: absolute;
			top:30%;
			left:0%
		}
		.arrow img{
			width: 30%;
			height: 30%;
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
	<!--<a href="#" id="Enter_Test_Code" class="test_code"><img id ="img" class="testimg" src="r_bg.png"></a>
	<div class="testbg">
		<div class="testcontent">
			<div class="close">+</div>
			<form action="" method="">
				<input type="text" name="testcode" placeholder="Test Code">
				<input class="btn" type="submit" value="SUBMIT" >
			</form>
		</div>
	</div>
<script type="text/javascript" >

document.getElementById('.img').addEventLListner('click',f
function f (){
	document.querySelector('.testbg').style.display='flex';
});

document.getElementById('.close').addEventLListner=('click',ff
function ff (){
	document.querySelector('.testbg').style.display='none';
});


</script>-->
<img class="logo" src="logo_o.png">

<div class="header"><h1>Welcome Learner</h1></div>
<div class="arrow">
	<img src="arrow.gif">
</div>
<div class="img_test">
	<img src="start_test.png">
</div>

<div class="testcode">
	<form action="connect_start_test.php" method="post">
		<input type="text" name="test_code" placeholder="Test Code">
		<input class="btn"type="submit" value="SUBMIT">
	</form>
</div>
<div class="record">
<img src="1.gif">
</div>
<div class="two">
	<img src="2.gif">
</div>

<div class="para">
	<p>How this site is benificial for students and how they can acheive there goals.They also should now that by just an email to admin they can get a series of test on what ever topic they wanted.</p>
</div>

</body>
</html>

