<?php
	require "config.php";
	
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name= $_POST['last_name'];
	$password = $_POST['password'];
	$password_confirm = $_POST['password_confirm'];
	$usertype = 'verifier';
	$security_q_1 = $_POST['security_q_1'];
 	$security_a_1 = $_POST['security_a_1'];
 	$security_q_2 = $_POST['security_q_2'];
 	$security_a_2 = $_POST['security_a_2'];
 	$security_q_3 = $_POST['security_q_3'];
 	$security_a_3 = $_POST['security_a_3'];
 	$image_link = $_POST['image_link'];
 	$dob_month = $_POST['dob_month'];
 	$dob_day = $_POST['dob_day'];
 	$dob_year = $_POST['dob_year'];
	
	$error = '';	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	

	//error checking
	if(!preg_match($email_exp,$email)) {
		$error = 'no e-mail.';
		echo 'Please enter a valid email.<br>';	
	}

	if(strlen($first_name)==0) {
		$error = 'no first name.';	
		echo 'Please enter your first name.<br>';
	}
	
	if(strlen($last_name)==0) {
		$error = 'no last name.';	
		echo 'Please enter your last name.<br>';
	}
	
	if(strlen($password)==0) {
		$error = 'no password.';	
		echo 'Please enter a password.<br>';
	}
	
	if(strlen($password_confirm)==0) {
		$error = 'no password.';	
		echo 'Please confirm your password.<br>';
	}
	
	if($password !== $password_confirm) {
		$error = 'passwords do not match.';	
		echo 'Passwords do not match.<br>';
	}
	
	//password encryption
	$pass = mysql_escape_string($_POST['password']);
	$salt = sha1(md5($pass));
	$pass = md5($pass.$salt);
	$pass = md5($pass.$salt);

	if(strlen($security_q_1)==0) {
		$error = 'no security question 1.';	
		echo 'Please enter your first security question.<br>';
	}

	if(strlen($security_a_1)==0) {
		$error = 'no security answer 1.';	
		echo 'Please enter your first security answer.<br>';
	}

	if(strlen($security_q_2)==0) {
		$error = 'no security question 2.';	
		echo 'Please enter your second security question.<br>';
	}

	if(strlen($security_a_2)==0) {
		$error = 'no security answer 2.';	
		echo 'Please enter your second security answer.<br>';
	}

	if(strlen($security_q_3)==0) {
		$error = 'no security question 3.';	
		echo 'Please enter your third security question.<br>';
	}

	if(strlen($security_a_3)==0) {
		$error = 'no security answer 3.';	
		echo 'Please enter your third security answer.<br>';
	}

	if(strlen($image_link)==0) {
		$error = 'no image.';	
		echo 'Please upload an image.<br>';
	}

	if(strlen($dob_month)==0) {
		$error = 'no dob month.';	
		echo 'Please enter the month of your DOB.<br>';
	}

	if(strlen($dob_day)==0) {
		$error = 'no dob day.';	
		echo 'Please enter the day of your DOB.<br>';
	}

	if(strlen($dob_year)==0) {
		$error = 'no dob year.';	
		echo 'Please enter the year of your DOB.<br>';
	}

	$sqlc="SELECT * FROM $table WHERE email='$email'";
	$resultc=mysql_query($sqlc);

	// Mysql_num_row is counting table row
	$countc=mysql_num_rows($resultc);
	
	// If result matched $email table row must be 1 row
	if($countc==0){
		if ($error == '') {
			$sql="INSERT INTO $table (email, first_name, last_name, password, usertype, security_q_1, security_a_1, security_q_2, security_a_2, security_q_3, security_a_3, image_link, dob_month, dob_day, dob_year)
			VALUES
			('$_POST[email]','$_POST[first_name]','$_POST[last_name]','$pass','$usertype','$_POST[security_q_1]','$_POST[security_a_1]','$_POST[security_q_2]','$_POST[security_a_2]','$_POST[security_q_3]','$_POST[security_a_3]','$_POST[image_link]','$_POST[dob_month]','$_POST[dob_day]','$_POST[dob_year]')";
			
			if (!mysql_query($sql,$conn))
			{
				die('Error: ' . mysql_error());
			}
			else
			{
			echo 'Update successful.';
			  }
		}
	}
	else
	{
	echo 'An account is already associated with that email.';
	}

	mysql_close($conn);
?>