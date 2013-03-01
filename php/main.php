<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}
?>

<!DOCTYPE html>
    <head>
        <title>
        	Database
        </title>
    </head>
    <body>
    	<h1>3D Prints Express Database</h1>
        <br>
        <hr>
        <br>
        <form action="display_table.php" method="post">
        	display table:
            <input type="submit" value="display">
        </form>
        <br>
        <hr>
        <br>
        <form action="email_delete.php" method="post">
            Email: <input type="text" name="email">
            <br>
            &emsp;(email of account to delete)
            <input type="submit">
        </form>
        <br>
        <hr>
        <br>
        <form action="delete_table.php" method="post">
        	delete table: 
            <input type="submit">
        </form>
        <br>
        <hr>
        <br>
       	<form action="create_table.php" method="post">
        	create table: 
            <input type="submit">
        </form>
        <br>
        <hr>
        <br>
        <a href="logout.php">Logout</a>
    </body>
</html>