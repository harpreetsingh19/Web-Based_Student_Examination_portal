<?php
session_start();

$ausername=$_POST['admin'];
$apassword=$_POST['Password'];

if(!empty($apassword) && !empty($ausername)){
	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="stud";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);
	if(mysqli_connect_error())
	{
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
		else
		{
			$select="select * from admin where username=? AND password=? Limit 1";
			//$result=mysql_query($select);

			$stmt=$conn->prepare($select);
			$stmt->bind_param("ss",$ausername,$apassword);
			$stmt->execute();
			$stmt->bind_result($ausername,$apassword);
			$stmt->store_result();
			$num=$stmt->num_rows;


			if($num==1)
			{
				$_SESSION['user']=$ausername;
					echo'<script type="text/javascript">
   					window.open("admin_portal.php");
					</script>';
					exit();
			}
			else
			{
				echo"Invalid username or password";
			}
		
		}
	
}


?>