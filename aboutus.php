<!DOCTYPE html>
<html lang="en">
<head>

	<style>

        .aboutus{
            display: flex;
            padding: 2%;
            font-size: 150%;
            background-color: rgba(235, 235, 235, 0.5);
            border-radius: 5px;
        }

        .aboutus .history{
            flex:75%;
        }

        .aboutus .staff{
            flex:25%;
        }

        @media screen and (max-width: 850px) {
			.aboutus{
				font-size: 100%;
			}
		}

	</style>
	
</head>

<body>
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

    <div class="aboutus">
        <div class="staff">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem ad aspernatur, quia facilis consequatur dicta, voluptate tempore animi impedit, ex quos nobis eum in doloribus dignissimos corporis soluta praesentium.
            </p>
        </div>

        <div class="history">
            <p>
            The Cake Whisperer is a baking company that was founded in 2020. The founder of the company is Liau Kai Ze. One day he was thinking about why all people are buying cakes but not baking cakes by themselves. Therefore he started to gather all his friends to start a company that teaches people to bake. The cake baked by people themselves is much healthier than the one that is sold at shops because all the ingredients are provided by themselves but the cake outside the store we do not know any ingredient in it. Therefore, the main duty of this company is to bring happiness to people through baking courses to people all around the world. Moreover,customers can select their classes to be conducted physically or online at our website. If the customer decides to have their class physically, all the utensils and ingredients will be provided by our company while the customer who selected online classes will not be provided.
            </p>
        </div>

    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>