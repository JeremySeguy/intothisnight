<?php
	require "config.php";
	mysql_query("ALTER TABLE signup DROP date") or die(mysql_error());  
	mysql_query("ALTER TABLE signup ADD date VARCHAR(45)") or die(mysql_error());  
?>