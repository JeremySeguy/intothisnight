<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}
	
	require "config.php";
	
	$sql=mysql_query("DROP TABLE $table", $conn);
	
	if(!$sql)
	{
	  die('Could not delete table: ' . mysql_error() . '<br><br><a href="index.html">home</a>');
	}

	echo "Table deleted.";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>