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

        .work{
            padding: 2%;
            font-size: 350%;
            font-weight: bold;
            text-align: center;
            transition: 0.5s;
            background-color: rgba(235, 235, 235, 0.5);
            border-radius: 5px;
        }

        @media screen and (max-width: 850px) {
			.work{
				font-size: 200%;
			}
		}

	</style>
	
</head>

<body>

    <div class="work">
        <p>
            We are currently not accepting any work offers.
        </p>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>