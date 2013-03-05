<?php
	/*session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}*/

	require "config.php";
	
	/* Tables list
	$clubber = "clubber";
	$webconnection = "webconnection";
	*/
	
	//1.Create clubber table
	$query=$query+mysql_query("
		CREATE TABLE clubber (
			 id_user int NOT NULL AUTO_INCREMENT,
			 PRIMARY KEY(id_user),
			 name VARCHAR(30),
			 firstname VARCHAR(30),
			 nickname VARCHAR(30),
			 email VARCHAR(45),
			 gender VARCHAR(30),
			 age INT,
			 city VARCHAR(30),
			 kindaccount VARCHAR(30)
		 )") or $error="response:<br>" . mysql_error();
	
	//2.Create webconnection table
	$query=$query+mysql_query("
		CREATE TABLE webconnection (
		 	id_connection VARCHAR(30) NOT NULL,
			PRIMARY KEY(id_connection),
			duration FLOAT,
			connection_date DATE,
			numberpages INT
		 )") or $error=$error . "<br>" . mysql_error();
	
	//3.Create user_connection table
	$query=$query+mysql_query("
		CREATE TABLE user_connection (
			id_connection VARCHAR(30) NOT NULL,
			id_user int NOT NULL,
			PRIMARY KEY(id_user,id_connection)
		 )") or $error=$error . "<br>" . mysql_error();
	
	//4.Create club table
	$query=$query+mysql_query("
		CREATE TABLE club(
			id_club int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_club),
			name VARCHAR(30),
			city VARCHAR(30),
			musicstyle	VARCHAR(30),
			about LONG
		)") or $error=$error . "<br>" . mysql_error();
		
	//5.create user_club table
	$query=$query+mysql_query("
		CREATE TABLE user_club(
			id_user int NOT NULL,
			id_club int NOT NULL,
			numberpeople INT NOT NULL,
			numbertable INT,
			day_book DATE,
			PRIMARY KEY (id_user,id_club)
		)") or $error=$error . "<br>" . mysql_error();
	
	//6.create administrator table
	$query=$query+mysql_query("
		CREATE TABLE administrator(
			id_administrator INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_administrator),
			name VARCHAR(30),
			firstname VARCHAR(30),
			kindright INT,
			email VARCHAR(30)
		)") or $error=$error . "<br>" . mysql_error();
	
	//7.create dj table
	$query=$query+mysql_query("
		CREATE TABLE dj(
			id_dj INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_dj),
			name VARCHAR(30),
			style VARCHAR(30),
			about LONG
		)") or $error=$error . "<br>" . mysql_error();

	//8.create party table
	$query=$query+mysql_query("
		CREATE TABLE party(
			id_party VARCHAR(30) NOT NULL,
			PRIMARY KEY (id_party),
			theme VARCHAR(30)
		)") or $error=$error . "<br>" . mysql_error();
	
	//9.create party_dj table
	$query=$query+mysql_query("
		CREATE TABLE party_dj(
			id_party VARCHAR(30) NOT NULL,
			id_dj INT NOT NULL,
			PRIMARY KEY (id_party, id_dj)
		)") or die($error=$error . "<br>" . mysql_error());
	
	//10.create drink table
	$query=$query+mysql_query("
		CREATE TABLE drink(
			id_drink INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_drink),
			name VARCHAR(30),
			description LONG,
			price FLOAT
		)") or die($error=$error . "<br>" . mysql_error());
	
	//11.create price table
	$query=$query+mysql_query("
		CREATE TABLE price(
			id_price INT NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_price),
			name VARCHAR(30),
			price FLOAT
		)") or die($error=$error . "<br>" . mysql_error());
	
	//12.create host table
	$query=$query+mysql_query("
		CREATE TABLE host(
			id_club INT,
			id_drink INT,
			id_price INT,
			id_party VARCHAR(30),
			opening TIME,
			closing TIME,
			PRIMARY KEY (id_club,id_drink,id_price,id_party)
		)") or die($error=$error . "<br>" . mysql_error());
	
	//12.create host table
	$query=$query+mysql_query("
		CREATE TABLE signup(
			id_user int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY(id_user),
			email VARCHAR(45)
		)") or die($error=$error . "<br>" . mysql_error() . "<br><br><a href='main.php'>home</a>");
	
	echo ($query/13)*100 . "% ";
	echo "Complete.";
	
	echo "<br><br><a href='main.php'>home</a>";
	
	mysql_close($conn);
?>