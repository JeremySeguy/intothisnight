<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}

	require "config.php";
	
	$sql = "DELETE FROM $table WHERE email='$_POST[email]'";
	
	if (!mysql_query($sql,$conn))
	  {
	  die('Error: ' . mysql_error() . '<br><br><a href="index.html">home</a>');
	  }
	echo "record(s) deleted";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>