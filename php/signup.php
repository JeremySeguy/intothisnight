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

	$subject = "intothisnight.com signup";
	$combined = "email: " . $email;

	$error = '';

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=utf-8' . "\r\n";

	$headers .=  "From: site <".$email."> \r\n";
	$headers .= "Reply-To: $email \r\n";
	$headers .=	'X-Mailer: PHP/' . phpversion();

	$mail_to_send_to = "info@intothisnight.com";			/*sending to*/
	$your_feedbackmail = "noreply@intothisnight.com ";			/*sent from*/

	$a = mail( $mail_to_send_to, $subject, $combined, $headers );

	mysql_close($conn);
?>