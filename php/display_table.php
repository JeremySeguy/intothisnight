<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}

	require "config.php";
	
	$result = mysql_list_tables($db);
	
	$num_rows = mysql_num_rows($result);
	for ($i = 0; $i < $num_rows; $i++) {
		echo "<br>Table: ", mysql_tablename($result, $i), "<br>";
	}
	
	mysql_free_result($result);
	
	echo "<br>";

	$result = mysql_query("SELECT COLUMNS FROM $table");

	while($row = mysql_fetch_array($result))
	  {
	  echo $row;
	  echo "<br />";
	  }
	
	$result = mysql_query("SELECT * FROM $table");

	while($row = mysql_fetch_array($result))
	  {
	  echo $row['personID'] . " " . $row['email'] . " " . $row['type'] . " " . $row['zip'] . " " . $row['what'];
	  echo "<br />";
	  }
	
	echo "<br><a href='main.php'>home</a>";

	mysql_close($conn);
?>