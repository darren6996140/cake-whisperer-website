<?php
include ('dbConn.php');
include("session.php");

$course=$_POST['course'];
$duration=$_POST['duration'];

$check = "SELECT idCourse FROM regcourse WHERE idCourse = '$course' AND email = '$email' ";
$result = mysqli_query($conn, $check) or die(mysqli_error());

if (mysqli_num_rows($result)> 0){
	echo '<script>
		alert("You have already registered for this course.");
		window.location.href="courseForm.php";</script>';
}

else{

	$mysql= "INSERT INTO regcourse
	(email, idCourse, duration)
	VALUES ('$email', '$course', '$duration')";
	
	if (mysqli_query($conn, $mysql)){

		echo '<script>
			alert("Registration successful!")
			window.location.href="courseForm.php";</script>';
			
	}
	
	else{
		echo "Error;" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>