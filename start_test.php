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
	}else{
			$select="select * from adminquestionanswer where sub=$code Limit 1";

			$result=mysql_query($select) or die(mysql_error());

			$row=mysql_fetch_array($result);

			 $q1=$row[0];
			 $q1o1=$row[1];
			 $q1o2=$row[2];
			 $q1o3=$row[3];
			 $q1o4=$row[4];
			 $ca1=$row[5];
			 $q2=$row[6];
			 $q2o1=$row[7];
			 $q2o2=$row[8];
			 $q2o3=$row[9];
			 $q2o4=$row[10];
			 $ca2=$row[11];
			 $q3=$row[12];
			 $q3o1=$row[13];
			 $q3o2=$row[14];
			 $q3o3=$row[15];
			 $q3o4=$row[16];
			 $ca3=$row[17];
			 $q4=$row[18];
			 $q4o1=$row[19];
			 $q4o2=$row[20];
			 $q4o3=$row[21];
			 $q4o4=$row[22];
			 $ca4=$row[23];
			 $q5=$row[24];
			 $q5o1=$row[25];
			 $q5o2=$row[26];
			 $q5o3=$row[27];
			 $q5o4=$row[28];
			 $ca=$row[29];
			}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Started</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="q1">
		<?php  echo "$q1"; ?><br>
		<ol>
			<li>
				<?php  echo "$q1o1"; ?> <br>
				<?php  echo "$q1o2"; ?> <br>
				<?php  echo "$q1o3"; ?> <br>
				<?php  echo "$q1o4"; ?> <br>
			</li>
		</ol>
	</div>

</body>
</html>