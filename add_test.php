<!DOCTYPE html>
<html>
<head>
	<title>Adding a test</title>
	<style type="text/css">

		body{
			margin: 0;
			padding: 0;
			background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;
		}
		.heading{
			font-size: 40px;
			position: absolute;
			top:0%;
			left:40%;
			border-bottom: 5px dotted #00085e ;
		}
		.add_test{
			width: 55%;
			position: absolute;
			top: 6%;
			left:5%;
			border:none;
			outline: none;
			background-color:rgba(100,0,0,0.3);
			font-size: 20px;
			padding:3px 5px; 
			border-radius: 5px;
			padding-top: 22px;
		}
		.ques{
			width: 94.5%;
			padding:10px 4px;
			font-size: 20px;
			background: none;
			outline: none;
			border:none;
			border-bottom: 1px solid white;
			color: white;
		}
		.options input{
			background: none;
			outline: none;
			border:none;
			padding: 8px 2px;
			border-bottom: 1px dashed grey; 
			color: white;
			font-size: 18px;
		}
		.btn{
			width:50%;
			background: #155c1c;
			border:1px solid white;
			color:white;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
			position: absolute;
			left: 22%;
		}
		.subject{
			background: none;
			outline: none;
			border:none;
			font-size: 18px;
			border-bottom: 2px solid black;
			position: absolute;
			top:0%;
			left: 0%;
			background:rgba(200,0,0,0.1);
			padding: 4px 5px;
			color: white;

		}.logo{
		
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

	<b class="heading" >Questions to be added</b><br>
	<div class="add_test">
		<form action="connect_add_test.php" method="post">
		
		<!--question 1-->
		<input class="ques" type="text" name="questionOne" placeholder="Question one" required><br>
		<div class="options">
			<input type="text" name="q1o1"  placeholder="Option 1" required>
			<input type="text" name="q1o2" placeholder="Option 2" required>
			<input type="text" name="q1o3" placeholder="Option 3" required>
			<input type="text" name="q1o4" placeholder="Option 4" required>
			<input type="text" name="ca1" placeholder="Correct Answer" required>
		</div><br>
		<!--question 2-->
		<input class="ques" type="text" name="questionTwo" placeholder="Question Two" required><br>
		<div class="options">
			<input type="text" name="q2o1"placeholder="Option 1" required>
			<input type="text" name="q2o2" placeholder="Option 2" required>
			<input type="text" name="q2o3" placeholder="Option 3" required>
			<input type="text" name="q2o4" placeholder="Option 4" required>
			<input type="text" name="ca2" placeholder="Correct Answer" required>
		</div><br>
		<!--question 3-->
		<input class="ques" type="text" name="questionThree" placeholder="Question Three" required><br>
		<div class="options">
			<input type="text" name="q3o1" placeholder="Option 1" required>
			<input type="text" name="q3o2" placeholder="Option 2" required>
			<input type="text" name="q3o3" placeholder="Option 3" required>
			<input type="text" name="q3o4" placeholder="Option 4" required>
			<input type="text" name="ca3" placeholder="Correct Answer" required>
		</div><br>
		<!--question 4-->
		<input class="ques" type="text" name="questionFour" placeholder="Question Four" required><br>
		<div class="options">
			<input type="text" name="q4o1" placeholder="Option 1" required>
			<input type="text" name="q4o2" placeholder="Option 2" required>
			<input type="text" name="q4o3" placeholder="Option 3" required>
			<input type="text" name="q4o4" placeholder="Option 4" placeholder="Option 1" required>
			<input type="text" name="ca4" placeholder="Correct Answer" required>
		</div><br>
		<!--question 5-->
		<input class="ques" type="text" name="questionFive" placeholder="Question Five" required><br>
		<div class="options">
			<input type="text" name="q5o1" placeholder="Option 1" required>
			<input type="text" name="q5o2" placeholder="Option 2" required>
			<input type="text" name="q5o3" placeholder="Option 3" required>
			<input type="text" name="q5o4" placeholder="Option 4" required>
			<input type="text" name="ca5" placeholder="Correct Answer" required>
		</div><br>

<input class="subject" type="text" name="Subject" placeholder="Subject">
		<input class="btn" type="submit" value="Submit Ques Ans">
	</form>
	</div>
	

</body>
</html>