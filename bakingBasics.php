<!DOCTYPE html>
<html lang="en">
<head>

    <?php

    error_reporting(E_ERROR | E_PARSE);

    session_start();

    $email = $_SESSION['email'];

    if ($email == true){
        include("headerUser.php");
    }

    else{
        include("header.php");
    }
    ?>

	<style>

        .description, .details{
            padding: 1%;
            font-size: 250%;
            transition: 0.5s;
            background-color: rgba(235, 235, 235, 0.5);
            border-radius: 5px;
        }

        .details{
            font-weight: bold;
            display: flex;
        }

        .details .info{
            flex: 50%;
            text-align: left;
        }

        .details .register{
            flex: 50%;
            text-align: right;
        }

        .details .register a{
            border-style: solid;
            text-decoration: none;
            border-width: 3px;
            padding: 1%;
            color: rgb(75, 171, 255);
            transition: 0.5s;
        }

        .description p{
            margin-top: 0;
        }

        .description img{
            width: 50%;
            padding: 1%;
        }

        @media screen and (max-width: 850px) {
			.description, .details{
				font-size: 180%;
			}
		}

        .details .register a:hover{
            color: rgba(0, 0, 0, 0.5);
        }

	</style>
	
</head>

<body>

    <?php
        include("session.php");

        $mysql = "SELECT * FROM course WHERE courseName  = 'Baking Basics'";
        $result = mysqli_query($conn, $mysql) or die(mysql_error());

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>

        <div class="description">
            <center><img src="images/bakingBasics.jpg" alt="bakingBasics"></center>
            <p>
                Welcome to Baking Basics! This course will teach you all the basics about baking to kickstart your love for baking! Recommended for beginners.
            </p>
        </div>

        <br>

        <div class="details">

            <div class="info">
                <p>Fee: RM<?php echo $row['fee'];?> / week</p>
                <p>Time: Every Monday at <?php echo $row['time'];?> for 2 hours</p>
            </div>

            <?php }} ?>

            <div class="register">
                <br><p>
                <?php
                    $mysql = "SELECT idCourse FROM regcourse WHERE email  = '$email' ";
                    $result = mysqli_query($conn, $mysql) or die(mysql_error());

                    $courseRegistered = array();

                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            array_push($courseRegistered, $row['idCourse']);
                        }
                    }

                    $course = array_search("1", $courseRegistered);

                    if ($email == ""){
                        echo '<a href="userForm.php">Register as new user</a>';
                    }

                    elseif ($course == ""){
                        echo '<a href="courseForm.php">Register Now!</a>';
                    }                    

                    else{
                        echo ("You are already registered to this course.");
                    }

                ?>
                </p>
            
            </div>
                   
        </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>