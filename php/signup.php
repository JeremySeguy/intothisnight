<?php
	require "config.php";
	
	$email = $_POST['email'];
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	if($email=='') {
		echo "Error! Email field is empty.";	
		exit;
	}
	
	if(!preg_match($email_exp,$email)) {
		echo "Error! Please enter a valid email.";	
		exit;
	}
	
	$sql="INSERT INTO signup (email)
		VALUES
	('$_POST[email]')";
	
	if (!mysql_query($sql))
	{
		die('Error! ' . mysql_error());
	}
	else
	{
		echo 'ok';
	}

	mysql_close($conn);
?>