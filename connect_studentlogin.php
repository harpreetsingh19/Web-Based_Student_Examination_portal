<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="stud";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);
	if(mysqli_connect_error()){
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$select="select username,password from registration where username=? AND password=? Limit 1";
			//$result=mysql_query($select);

			$stmt=$conn->prepare($select);
			$stmt->bind_param("ss",$username,$password);
			$stmt->execute();
			$stmt->bind_result($username,$password);
			$stmt->store_result();
			$num=$stmt->num_rows;


			if($num==1){
				echo'<script type="text/javascript">
   						window.open("student_portal.php");
					</script>';
			}
			else{
				die("invalid username or password");
			}

}

?>