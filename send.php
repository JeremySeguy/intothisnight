<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$subject = "intothisnight.com feedback";
	$message = $_POST['message'];
	$combined = "name: " . $name . "<br>" . "email: " . $email . "<br>" . "message: " . $message;

	$error = '';

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

	$headers  =  'MIME-Version: 1.0' . "\r\n";
	$headers .=  'Content-type: text/html; charset=utf-8' . "\r\n";

	$headers .=  "From: $name <".$email."> \r\n";
	$headers .= "Reply-To: $email \r\n";
	$headers .=	'X-Mailer: PHP/' . phpversion();

	$mail_to_send_to = "info@intothisnight.com";			/*sending to*/
	$your_feedbackmail = "noreply@intothisnight.com ";			/*sent from*/
	
	
	if(strlen($name)==0) {
		$error = '<span id="erase" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; overflow-y:hidden; color:#F00;">Please enter your name.</span>';	
	}

	if(!preg_match($email_exp,$email)) {
		$error = '<span id="erase" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; overflow-y:hidden; color:#F00;">Please enter a valid email.</span>';
	}

	if(strlen($message)<1) {
		$error = '<span id="erase" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; overflow-y:hidden; color:#F00;">Please enter a message.</span>';	
	}


	if(strlen($error)==0){
		$a = mail( $mail_to_send_to, $subject, $combined, $headers );
		if ($a) {
			echo '<span id="erase" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; overflow-y:hidden; color:#0C0;">Success! <br> Confirmation email sent.</span>';
		}
		else {
			echo '<span id="erase" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; overflow-y:hidden; color:#F00;">Error submitting! <br> Please retry.</span>';
		}
	}
	else{
		echo $error;
	}
?>