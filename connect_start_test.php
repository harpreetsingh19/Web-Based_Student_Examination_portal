<?php

session_start();

    $code=$_POST['test_code'];

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
			$select="select sub from adminquestionanswer where sub=? Limit 1";


 			$stmt=$conn->prepare($select);
			$stmt->bind_param("s",$code);
			$stmt->execute();
			$stmt->bind_result($code);
			$stmt->store_result();
			$num=$stmt->num_rows;


			if($num==1){
				
			$select="select * from adminquestionanswer where sub='$code' ";

			$result= mysqli_query($conn,$select);

			$row= mysqli_fetch_assoc($result);

			}
			else
			{
				die("Invalid test code");
			}
		}
		
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Started</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url(b.png);
			background-size: cover;
			background-repeat: no-repeat;
		}
		.ques{
			position: absolute;
			top:6%;
			left: 5%;
			padding: 60px;
			border:1.5px dotted #08067d;
			background: rgba(0,200,0,0.4);
			border-radius: 4px;
			font-size: 18px;
		}
		.form{
			position: absolute;
			top:30%;
			left: 32%;
			color: white;
			padding: 3.5%;
			background: rgba(0,0,0,0.6);
			border-radius: 5px;
			font-size: 18px;
		}
		.form input{
			width: 100%;
			padding: 5px;
			background: none;
			outline: none;
			border:none;
			border-bottom: black;
			display: block;
			margin: :15px auto;
			color: white;
		}
		.btn{
			width:100%;
			background: none;
			border:1px solid #3C1C78;
			color:red ;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
			margin: 12px 0;
		}
		.para{
			position: absolute;
			top:10%;
			left:35%;
			font-size: 18px;
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

	<div class="para"><p>Candidate should Answer the Questions carefully.</p>
		<p><b><em>It is case sensitive.</em></b></p>
	</div>

	<div class="ques">
	<ol>
		<li>
		<?php  echo $row['q1']; ?><br>
		<ol>
			
			<li><?php  echo $row['q1o1']; ?></li>
			<li><?php  echo $row['q1o2']; ?></li>
			<li><?php  echo $row['q1o3']; ?></li>
			<li><?php  echo $row['q1o4']; ?></li>
			</li>
		</ol>
		</li><br>

		<li>
		<?php  echo $row['q2']; ?><br>
		<ol>
			
			<li><?php  echo $row['q2o1']; ?></li>
			<li><?php  echo $row['q2o2']; ?></li>
			<li><?php  echo $row['q2o3']; ?></li>
			<li><?php  echo $row['q2o4']; ?></li>
			</li>
		</ol>
		</li><br>

		<li>
		<?php  echo $row['q3']; ?><br>
		<ol>
			
			<li><?php  echo $row['q3o1']; ?></li>
			<li><?php  echo $row['q3o2']; ?></li>
			<li><?php  echo $row['q3o3']; ?></li>
			<li><?php  echo $row['q3o4']; ?></li>
			</li>
		</ol>
		</li><br>

		<li>
		<?php  echo $row['q4']; ?><br>
		<ol>
			
			<li><?php  echo $row['q4o1']; ?></li>
			<li><?php  echo $row['q4o2']; ?></li>
			<li><?php  echo $row['q4o3']; ?></li>
			<li><?php  echo $row['q4o4']; ?></li>
			</li>
		</ol>
		</li><br>

		<li>
		<?php  echo $row['q5']; ?><br>
		<ol>
			
			<li><?php  echo $row['q5o1']; ?></li>
			<li><?php  echo $row['q5o2']; ?></li>
			<li><?php  echo $row['q5o3']; ?></li>
			<li><?php  echo $row['q5o4']; ?></li>
			</li>
		</ol>
		</li><br>
	</ol>
	</div>
	<div class="form">
	<form action="verify_ans.php" method="post">
		<input type="text" name="name" placeholder="NAME" required><br>
		<input type="text" name="email" placeholder="EMAIL-ID" required><br>
		<input type="text" name="code" placeholder="TEST CODE" required><br>
		<input type="text" name="a1" placeholder="Correct Answer for Ques 1" ><br>
		<input type="text" name="a2" placeholder="Correct Answer for Ques 2" ><br>
		<input type="text" name="a3" placeholder="Correct Answer for Ques 3" ><br>
		<input type="text" name="a4" placeholder="Correct Answer for Ques 4" ><br>
		<input type="text" name="a5" placeholder="Correct Answer for Ques 5" ><br>
		<input class="btn" type="submit" value="SUBMIT ANSWERS">
	</form>
	</div>

</body>
</html>