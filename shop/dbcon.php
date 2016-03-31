<?php
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password="saikat"; // Mysql password 
	$db_name="shop"; // Database name 
	$tbl_name="users"; // Table name 

	// Connect to server and select databse.
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name",$con)or die("cannot select DB");
?>
