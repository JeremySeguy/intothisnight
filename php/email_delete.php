<?php
	require "config.php";
	$date=date('Y-M-j');
	echo $date;
	mysql_query("UPDATE signup SET date=$date WHERE id_user = 1") or die(mysql_error());
	mysql_close($conn);
?>