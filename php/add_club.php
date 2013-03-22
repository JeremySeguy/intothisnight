<?php
	require "config.php";

	$sql="INSERT INTO club (city,name)
			VALUES
		('San Francisco','Ruby Skye')";
	if (!mysql_query($sql,$conn))
		{
			die('Error: ' . mysql_error());
		}
		else
		{
			echo 'Update successful.<br>';
		}
	
	$sql="INSERT INTO club (city,name)
			VALUES
		('San Francisco','Infusion Lounge')";
	if (!mysql_query($sql,$conn))
		{
			die('Error: ' . mysql_error());
		}
		else
		{
			echo 'Update successful.<br>';
		}
		
	$sql="INSERT INTO club (city,name)
			VALUES
		('San Francisco','DNA Lounge')";
	if (!mysql_query($sql,$conn))
		{
			die('Error: ' . mysql_error());
		}
		else
		{
			echo 'Update successful.<br>';
		}
		
	mysql_close($conn);
?>