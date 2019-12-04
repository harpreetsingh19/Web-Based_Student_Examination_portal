<?php

if(($_POST["username"]=="mark") && ($_POST["password"]=="pass"))
{
	echo "Login successfull";
}
else
{
	echo "invalid password or username";
}
?>