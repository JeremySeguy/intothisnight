<?php
	/*session_start();
	
	if(!session_is_registered(email)){
		header("location:index.php");
	}*/

	require "config.php";
	
	$result = mysql_list_tables($db);
	
	$num_rows = mysql_num_rows($result);
	for ($i = 0; $i < $num_rows; $i++) {
		echo "<br>Table: ", mysql_tablename($result, $i), "<br>";
		echo "&emsp;&emsp;&emsp;Fields: ";
		
		$tname = mysql_tablename($result, $i);
		$res=mysql_query("SELECT * FROM $tname"); 
		$num_fields = mysql_num_fields($res);

		for ($j=0; $j < $num_fields; $j++){ 
			echo mysql_field_name($res, $j) . ", "; 
		}		
		echo "<br>";
		
		if ($tname == "signup"){
			$result2 = mysql_query("SELECT * FROM $tname");
			while($row = mysql_fetch_array($result2)){
				echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; ";
			  	echo $row['id_user'] . ",&emsp;&emsp;" . $row['email'];
			  	echo "<br />";
		  	}
		}
		
		echo "<br>";
	}
	
	echo "<br>";

	echo "<br><a href='main.php'>home</a>";

	mysql_close($conn);
?>