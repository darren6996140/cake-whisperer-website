<?php
session_start();

include('dbConn.php');

$email = $_POST['email'];
$oldPassword = $_POST['password'];
$password = password_hash($oldPassword, PASSWORD_DEFAULT);

if(isset($_POST['login']))
{

	$mysql = "SELECT * FROM user
			WHERE email = '$email' AND password ='$password'";
	$result = mysqli_query($conn , $mysql);
	$row = mysqli_fetch_array($result);
	
	if(mysqli_num_rows($result) > 0)
	{
	
		$_SESSION['email'] = $row['email'];
		$name = $row['name'];
		
	
		echo '<script>alert("Welcome '.$name.'");
			window.location.href="mainpageUser.php";</script>';
	}
	else
	{
		echo '<script>alert("The email or password entered is wrong.");
			window.location.href="loginForm.php";</script>' ;
		
	}
}

mysqli_close($conn);

?>