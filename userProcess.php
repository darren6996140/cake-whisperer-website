<?php
include ('dbConn.php');

$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$noPhone=$_POST['noPhone'];

$check = "SELECT email FROM pelanggan WHERE email = '$email'";
$result = mysqli_query($conn, $check) or die(mysqli_error());

if (mysqli_num_rows($result)> 0)
{
	echo '<script>
		alert("This email is registered to an account, please try another email.");
		window.location.href="userForm.php";</script>';
}

else{

	$mysql= "INSERT INTO user
	(email, password, name, noPhone, class)
	VALUES ('$email', '$password', '$name', '$noPhone' , 2)";
	
if (mysqli_query($conn, $mysql)){

	echo '<script>
		 alert("User registration successful!")
		 window.location.href="loginForm.php";</script>';
		
	}
else{
	echo "Error;" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>