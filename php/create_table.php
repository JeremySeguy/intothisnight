<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}

	require "config.php";
	
	//Create Table in DB
	mysql_query("
		/*Insert SQL query here*/
	)") or die(mysql_error());
 	
	if ($conn)
		{
		echo "Table created. <br><br>";
		}
	else
		{
		echo "Table creation failed. <br><br><a href='index.html'>home</a>";
	
	}
	echo "Complete.";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>