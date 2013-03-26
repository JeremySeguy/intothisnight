<?php
	require "config.php";
	
	$email = "info@intothisnight.com";
	
	$pass = "itntemp1234";
	$pass = mysql_escape_string($pass);
	$salt = sha1(md5($pass));
	$pass = md5($pass.$salt);
	$pass = md5($pass.$salt);

	if ((mysql_query("SELECT * FROM admin WHERE email='$email'"))==0){
		$sql="INSERT INTO admin (email,password)
				VALUES
			('$email','$pass')";
		if (!mysql_query($sql,$conn))
			{
				die('Error: ' . mysql_error());
			}
			else
			{
				echo 'Added successfully.<br>';
				echo $pass;
			}
	}
	else{
		echo "admin already exists.<br>";
	}

	echo "<a href='main.php'>home</a>";

	mysql_close($conn);
?>