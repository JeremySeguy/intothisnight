<?php
	require "config.php";
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 26") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 27") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 28") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 29") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 30") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 31") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 32") or die(mysql_error());
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 33") or die(mysql_error());
	if($sql){
		echo "ok";
	}
	mysql_close($conn);
?>