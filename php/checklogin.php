<?php
	session_start();
	session_destroy();
	session_start();
	
	require "config.php";
	
	$redirect="";
	
	// username and password sent from form
	$email=$_POST['email']; 
			
	//$_SESSION('emailpass') = $email;
	$password=$_POST['password']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysql_real_escape_string($email);
	
	//encrypt password
	$pass = mysql_escape_string($_POST['password']);
	$salt = sha1(md5($pass));
	$pass = md5($pass.$salt);
	$pass = md5($pass.$salt);

	$sqlv="SELECT * FROM $table2 WHERE email='$email' and password='$pass' and usertype='verifier'";
	$resultv=mysql_query($sqlv);

	// Mysql_num_row is counting table row
	$countv=mysql_num_rows($resultv);
	
	// If result matched $email and $pass, table row must be 1 row
	if($countv==1){
		// Register $email, $password and redirect to file "verify_success.php"
		session_register("email");
		session_register("pass"); 
		echo "verify";
	}
	else {

		$sql="SELECT * FROM $table2 WHERE email='$email' and password='$pass'";
		$result=mysql_query($sql);

		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
	
		// If result matched $email and $pass, table row must be 1 row
		if($count==1){
			// Register $email, $password and redirect to file "login_success.php"
			session_register("email");
			session_register("pass"); 
			echo "login";
			exit;
		}
		else {
			echo "Wrong Username or Password";
			exit;
		}
		echo "Wrong Username or Password";
	}
		
?>