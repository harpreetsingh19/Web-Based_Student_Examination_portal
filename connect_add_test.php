<?php

$q1=$_POST['questionOne'];
$q1o1=$_POST['q1o1'];
$q1o2=$_POST['q1o2'];
$q1o3=$_POST['q1o3'];
$q1o4=$_POST['q1o4'];
$ca1=$_POST['ca1'];

$q2=$_POST['questionTwo'];
$q2o1=$_POST['q2o1'];
$q2o2=$_POST['q2o2'];
$q2o3=$_POST['q2o3'];
$q2o4=$_POST['q2o4'];
$ca2=$_POST['ca2'];

$q3=$_POST['questionThree'];
$q3o1=$_POST['q3o1'];
$q3o2=$_POST['q3o2'];
$q3o3=$_POST['q3o3'];
$q3o4=$_POST['q3o4'];
$ca3=$_POST['ca3'];

$q4=$_POST['questionFour'];
$q4o1=$_POST['q4o1'];
$q4o2=$_POST['q4o2'];
$q4o3=$_POST['q4o3'];
$q4o4=$_POST['q4o4'];
$ca4=$_POST['ca4'];

$q5=$_POST['questionFive'];
$q5o1=$_POST['q5o1'];
$q5o2=$_POST['q5o2'];
$q5o3=$_POST['q5o3'];
$q5o4=$_POST['q5o4'];
$ca5=$_POST['ca5'];

$sub=$_POST['Subject'];

//connection

	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="stud";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);
	if(mysqli_connect_error()){
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$select="select sub from adminquestionanswer where sub=? Limit 1";
		$insert="INSERT INTO adminquestionanswer(q1,q1o1,q1o2,q1o3,q1o4,ca1,q2,q2o1,q2o2,q2o3,q2o4,ca2,q3,q3o1,q3o2,q3o3,q3o4,ca3,q4,q4o1,q4o2,q4o3,q4o4,ca4,q5,q5o1,q5o2,q5o3,q5o4,ca5,sub) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$stmt=$conn->prepare($select);
			$stmt->bind_param("s",$sub);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$num=$stmt->num_rows;
			if($num==0){
				$stmt->close();

				$st=$conn->prepare($insert);
				$st->bind_param("sssssssssssssssssssssssssssssss", $q1 , $q1o1, $q1o2, $q1o3, $q1o4, $ca1, $q2, $q2o1, $q2o2, $q2o3, $q2o4, $ca2, $q3, $q3o1, $q3o2, $q3o3, $q3o4, $ca3, $q4, $q4o1, $q4o2, $q4o3, $q4o4, $ca4, $q5, $q5o1, $q5o2, $q5o3, $q5o4, $ca5,$sub);
				$st->execute();
				$st->close();

				echo'<script type="text/javascript">
   						window.open("admin_portal.php");
					</script>';
				}
				else{
					echo "testcode name taken try another one";
				}
		}

?>
