<?php
$name=	$_POST['name'];
$age=	$_POST['age'];
$email=	$_POST['email'];
$number=$_POST['mno'];
$gender= $_POST['gender'];
$username=$_POST['username'];
$Password=$_POST['Password'];

if(!empty($name)|| !empty($age)|| !empty($email)|| !empty($number)|| !empty($gender)|| !empty($username)|| !empty($password) )
{
	$host="localhost";
	$dbus="root";
	$dbpass="";
	$dbname="stud";

	$conn=new mysqli($host,$dbus,$dbpass,$dbname);
	if(mysqli_connect_error()){
		die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}else{
		$select="select email from registration where email=? Limit 1";
		$insert="insert into registration (name,age,email,number,gender,username,password) values(?,?,?,?,?,?,?)";
		//$insert2="insert into user_info (username,password) values(?,?)";

		//prepare statement for select for verifing email &username

			$stmt=$conn->prepare($select);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$num=$stmt->num_rows;

			if($num==0){
				$stmt->close();

				//prapare statement for executing insert q

				$st=$conn->prepare($insert);
				$st->bind_param("sisisss",$name,$age,$email,$number,$gender,$username,$Password);
				$st->execute();
				$st->close();



				/*$st2=$conn->prepare($insert2);
				$st2->bind_param("ss",$username,$password);
				$st2->execute();
				$st2->close(); */

				//opening another window
				echo'<script type="text/javascript">
   						window.open("login.php");
					</script>';
				
			}else{
				echo"username or email is already!!!";
			}
	}
}
else{
	echo "All feilds are requried";
}
?>