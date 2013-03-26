<?php
	session_start();
	session_destroy();
		
	header('location:http://www.intothisnight.com/admin/admin.php');
?>