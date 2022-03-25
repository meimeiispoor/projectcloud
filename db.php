<?php
function connect_db() {
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "dbgadget";
	$prefix = "";
	$connect = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
	mysqli_select_db($connect,$mysql_database) or die("Could not select database");

	return $connect;
}
?>