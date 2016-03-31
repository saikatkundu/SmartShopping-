<?php

$localhost = "localhost";
$database = "demo";
$username = "root";
$password = "saikat";

$con =  mysql_connect($localhost,$username,$password) or die('doesnott connect');

mysql_select_db($database,$con) or die('database not selected');

$query ="select * from infzo";

$result =mysql_query($query);//ei mal ta dekh

while($row = mysql_fetch_array($result)){
	echo $row['id'];
	echo '<br>';
	echo $row['firstname'] . $row['lastname'];
	echo '<br>';
}








?>