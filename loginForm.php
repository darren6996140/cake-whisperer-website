<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .loginForm {
            background-color: white;
            padding-bottom: 20px;
            border-radius: 5px;
        }

        .loginForm .title p {
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .loginForm table {
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: rgb(235, 235, 235);
        }

        .loginForm table, .loginForm td {
            text-align: right;
        }

        .loginForm .form {
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .loginForm .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.2s;
        }

        .loginForm .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .loginForm a {
            font-size: 120%;
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

    <div class="loginForm">

        <form action="loginProcess.php" method="POST">
            <div class="title">
                <p>Log In</p>
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
                    <td><input type="text" name="email" class="form" required</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Password :</td>
                    <td><input type="password" name="password" class="form" required</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="login" value="Log In" class="button"></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td><a href="userForm.php">Register As New User</a></td>
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