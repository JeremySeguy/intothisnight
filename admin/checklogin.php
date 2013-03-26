<?php
	session_start();
	session_destroy();
	session_start();
	
	require "config.php";

	// username and password sent from form
	$email=$_POST['email']; 
			
	//$_SESSION('emailpass') = $email;
	$password=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$email = mysql_real_escape_string($email);
	
	//encrypt password
	$pass = mysql_escape_string($password);
	$salt = sha1(md5($pass));
	$pass = md5($pass.$salt);
	$pass = md5($pass.$salt);

	$sqlv="SELECT * FROM admin WHERE email='$email' and password='$pass'";
	$resultv=mysql_query($sqlv);

	// Mysql_num_row is counting table row
	$countv=mysql_num_rows($resultv);
	 
	// If result matched $email and $pass, table row must be 1 row
	if($countv==1){
		// Register $email and redirect to "main.php"
		session_register("email");
		echo "login";
	}
	else{
		echo "Email or Password is incorrect.";
	}
?>