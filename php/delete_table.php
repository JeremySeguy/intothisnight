<?php
	/*session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}*/
	
	require "config.php";
	
	/* query all tables */
	$sql = "SHOW TABLES FROM $db";
	if($result = mysql_query($sql)){
	  /* add table name to array */
	  while($row = mysql_fetch_row($result)){
		$found_tables[]=$row[0];
	  }
	}
	else{
	  die("Error, could not list tables. MySQL Error: " . mysql_error());
	}
	
	if(empty($found_tables)){
		die("No tables found<br><br><a href='main.php'>home</a>");
	}
	  
	/* loop through and drop each table */
	foreach($found_tables as $table_name){
	  $sql = "DROP TABLE $table_name";
	  if($result = mysql_query($sql)){
		echo "Success - table $table_name deleted. <br>";
	  }
	  else{
		echo "Error deleting $table_name. MySQL Error: " . mysql_error() . "<br>";
	  }
	}
		
	echo "<br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>