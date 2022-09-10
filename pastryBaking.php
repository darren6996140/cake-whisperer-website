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
            <p>Fee: <?php echo $row['fee'];?></p>
            <p>Date & Time: <?php echo $row['time'];?></p>
        </div>

    <?php
            }
        }
    include("footer.php");
    ?>
</body>

</html>