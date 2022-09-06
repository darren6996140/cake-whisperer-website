<?php
$db_host = "localhost";
$db_uname = "root";
$db_pwd = "";
$db_name = "cake_whisperer";

$conn = mysqli_connect($db_host, $db_uname, $db_pwd, $db_name);

if (!$conn) {
	die(mysqli_connect_error());
}

?>