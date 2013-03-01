<?php
	/*session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}*/

	require "config.php";
	
	/* Tables list
	$clubber = "clubber";
	$administrator = "administrator";
	$dj = "dj";
	$club = "administrator";
	$party = "party";
	$webconnection = "webconnection";
	$price = "price";
	$drink = "drink";
	$host = "host";
	$do = "do";
	$book = "book";
	$play = "play";
	*/
	
	
	//Create clubber table
	mysql_query("
		DROP TABLE IF EXISTS clubber;
		CREATE TABLE IF NOT EXISTS clubber (
		 id_user int NOT NULL AUTO_INCREMENT CONSTRAINT pk_user PRIMARY KEY,
		 name VARCHAR(30),
		 firstname VARCHAR(30),
		 nickname VARCHAR(30),
		 email VARCHAR(45),
		 gender VARCHAR(30),
		 age INT,
		 city VARCHAR(30),
		 kindaccount VARCHAR(30),
		 );") or die(mysql_error());
 	
	if ($conn)
		{
		echo "clubber table created. <br><br>";
		}
	else
		{
		echo "clubber table creation failed. <br><br><a href='index.html'>home</a>";
	
	}
	
	/*NEXT TABLE CREATION*/
	
	echo "Complete.";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>