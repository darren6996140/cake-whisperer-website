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
            font-weight: bold;
            transition: 0.5s;
            background-color: rgba(235, 235, 235, 0.5);
            border-radius: 5px;
        }

        .details{
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

        $mysql = "SELECT * FROM course WHERE name  = 'Pastry Baking'";
        $result = mysqli_query($conn, $mysql) or die(mysql_error());

        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
    ?>

        <div class="description">
            <center><img src="images/pastryBaking.jpg" alt="pastryBaking"></center>
            <p>
                Welcome to Pastry Baking! This course guides you on how to make pastries that will fill your home up with smells of butter every time you make them! Recommended for those who took Baking Basics.
            </p>
        </div>

        <br>

        <div class="details">

            <div class="info">
                <p>Fee: <?php echo $row['fee'];?></p>
                <p>Time: Every Friday at <?php echo $row['time'];?></p>
            </div>

            <?php }} ?>

            <div class="register">
                <br><p>
                <?php
                    $mysql = "SELECT idCourse FROM user WHERE email  = '$email' ";
                    $result = mysqli_query($conn, $mysql) or die(mysql_error());

                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $courseRegistered = $row['idCourse'];
                            $str = explode(",", $courseRegistered);
                            $course = array_search("5", $str);
                            
                            if ($course == ""){
                                echo '<a href="courseRegistration.php">Register Now!</a>';
                            }

                            else{
                                echo ("You are already registered to this course.");
                            }

                        }
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