<?php
	require "config.php";
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//password encryption
	$pass = mysql_escape_string($_POST['password']);
	$salt = sha1(md5($pass));
	$pass = md5($pass.$salt);
	$pass = md5($pass.$salt);

	$sql="INSERT INTO $table2 (email, password)
		VALUES
	('$_POST[email]','$pass')";
	
	if (!mysql_query($sql,$conn))
	{
		die('Error: ' . mysql_error());
	}
	else
	{
		echo 'Update successful.';
	}

	mysql_close($conn);
?>