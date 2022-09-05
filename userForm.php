<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        body {
			font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
			margin: 0;
		}

        .userForm {
            background-color: white;
            padding-bottom: 20px;
            border-radius: 5px;
        }

        .userForm .title p{
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .userForm table {
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

        .userForm table, .userForm td {
            text-align: right;
        }

        .userForm .form {
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .userForm .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
        }

        .userForm .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .userForm a {
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
            color: rgb(26, 140, 255);
        }

    </style>

</head>

<body>

    <?php
    include("header.php");
    ?>

    <div class="userForm">
        <form action="userProcess.php" method="POST">
            <div class="title">
                <p>New User Registration</p>
            </div>
            
            <table cellpadding=5px>

                <tr>
                    <td style="width: 20px"></td>
                    <td></td>
                    <td></td>
                    <td style="width: 20px"></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Email :</td>
                    <td><input type="email" name="email" placeholder="email@email.com" class="form" required></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Password :</td>
                    <td><input type="password" name="password" placeholder="8+ characters" pattern=".{8,128}" class="form" required></td>
                    <td></td> 
                </tr>

                <tr>
                    <td></td>
                    <td>Name :</td>
                    <td><input type="text" name="name" placeholder="Batman bin Suparman" class="form" required></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Phone Number :</td>
                    <td><input type="text" name="noPhone" placeholder="0121234567" class="form" required></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="register" value="Register" class="button"></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="index.php">Back To Main Menu</a></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </table>

        </form>

    </div>

    <?php
    include("footer.php");
    ?>

</body>

</html>