<?php
	session_start();
	
	if(!session_is_registered(email)){
		header("location:admin.php");
	}
	
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
?>

<html>
    <head>
        <title>
        	Admin System
        </title>
    </head>
    <body style="position: absolute; width: 1350px; height: 3000px;">
    	<span style="position: fixed; width: 800px; height: 350px; left: 400px; background: grey; opacity: 0.6; border-radius: 10px;"></span>
    	<div style="position: fixed; width: 800px; height: 350px; left: 400px; padding: 10px; ">
            <div style="opacity:1;">
            <h1>Admin System</h1>
            Clubs:
            <a href="#newclub">Add New Club</a> |
            <a href="#displayclub">Display Club List</a> |
            <a href="#deleteclub">Delete Club (by name)</a> |
            <br><br>
            Club Hash Tables:
            <a href="#displayclubht">Display Club Hash Table (by name)</a> |
            <a href="#deleteclubht">Delete Club Hash Table (by name)</a> |
            <a href="#createclubht">Create Club Hash Table (by name)</a> |
            <br><br>
            Administrators:
            <a href="#displaya">Display Admin List</a> |
            <a href="#deletea">Delete Admin (by email)</a> |
            <a href="#adda">Add Admin (by email)</a> |
            <br><br>
            Database:
            <a href="#displaydb">Display DB</a> |
            <a href="#deletedb">Delete DB</a> |
            <a href="#createdb">Create DB</a> |  
            <br><br><br>
            <h3>Logout: <a href="logout.php">Execute</a></h3>
            </div>  
        </div>
        <h3 id="newclub">Add New Club:</h3>
        <form action="newclub.php" method="post">
            name: <input type="text" name="name"><br>
            address: <input type="text" name="address"><br>
            city: <input type="text" name="city"><br>
          	averagenight: <input type="text" name="averagenight"><br>
          	averagedrink: <input type="text" name="averagedrink"><br>
          	averagecover: <input type="text" name="averagecover"><br>
            dresscode: <input type="text" name="dresscode"><br>
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="displayclub">Display Club List:</h3>
        <form action="displayclub.php" method="post">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="deleteclub">Delete Club (by name)</h3>
        <form action="deleteclub.php" method="post">
            Name: <input type="text" name="email">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="displayclubht">Display Club Hash Table (by name)</h3>
        <form action="displayclubht.php" method="post">
            Name: <input type="text" name="email">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="deleteclubht">Delete Club Hash Table (by name)</h3>
        <form action="deleteclubht.php" method="post">
            Name: <input type="text" name="email">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="createclubht">Create Club Hash Table (by name)</h3>
        <form action="createclubht.php" method="post">
            Name: <input type="text" name="email">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="displaya">Display Admin List</h3>
        <form action="displaya.php" method="post">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="deletea">Delete Admin (by email)</h3>
        <form action="deletea.php" method="post">
            Email: <input type="text" name="email">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="adda">Add Admin (by email)</h3>
        <form action="deletea.php" method="post">
            Email: <input type="text" name="email"><br>
            Password: <input type="password" name="email"><br>
            Password Confirm: <input type="password" name="email"><br>
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="displaydb">Display Database</h3>
        <form action="displaydb.php" method="post">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="deletedb">Delete Database</h3>
        <form action="deletedb.php" method="post">
            <input type="submit" value="Execute">
        </form>
        <br>
        <hr>
        <br>
        <h3 id="createdb">Create Database</h3>
        <form action="createdb.php" method="post">
            <input type="submit" value="Execute">
        </form>        
        <br>
        <hr>
        <br>
	</body>
</html>