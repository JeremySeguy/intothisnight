<?php
	/*session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}
	
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");*/

	require "config.php";
		
	//1.Create clubber table
	$query=mysql_query("
		CREATE TABLE clubber (
			 id_user int NOT NULL AUTO_INCREMENT,
			 PRIMARY KEY(id_user),
			 lastname VARCHAR(30),
			 firstname VARCHAR(30),
			 email VARCHAR(45),
			 gender VARCHAR(30),
			 age INT,
			 city VARCHAR(30),
			 kindaccount VARCHAR(30)
		 )") or $error="response:<br>" . mysql_error();
			
	//2.Create club table
	$query=$query+mysql_query("
		CREATE TABLE club(
			id_club int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_club),
			name VARCHAR(30),
			city VARCHAR(30),
			address	VARCHAR(45),
			averagenight VARCHAR(30),
			averagedrink VARCHAR(30),
			averagecover VARCHAR(30),
			dresscode long
		)") or $error=$error . "<br>" . mysql_error();
	
	//3.create signup table
	$query=$query+mysql_query("
		CREATE TABLE signup(
			id_user int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_user),
			email VARCHAR(45),
			date VARCHAR(45)
		)") or $error=$error . "<br>" . mysql_error();
	
	//4.create hash table
	$query=$query+mysql_query("
		CREATE TABLE hash(
			id_user int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_user),
			hash VARCHAR(45),
			date VARCHAR(45)
		)") or $error=$error . "<br>" . mysql_error();
		
	//5.create admin table
	$query=$query+mysql_query("
		CREATE TABLE admin(
			id_user int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_user),
			email VARCHAR(45),
			password VARCHAR(255)
		)") or die($error=$error . "<br>" . mysql_error() . "<br><br><a href='main.php'>home</a>");
	
	echo ($query/4)*100 . "% "; //signup table is permanent
	echo "Complete.";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>