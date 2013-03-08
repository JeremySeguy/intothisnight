<?php
	require "config.php";
	$sql=mysql_query("DELETE FROM signup WHERE id_user = 20") or die(mysql_error());
	if($sql){
		echo "ok";
	}
	mysql_close($conn);
?>