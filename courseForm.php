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
        .courseForm {
            background-color: var(--background);
            padding-bottom: 20px;
            border-radius: 5px;
            color: var(--text);
        }

        .courseForm .title p {
            font-size: 300%;
            font-weight: bold;
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

        .courseForm table {
            border: none;
            border-radius: 5px;
            border-collapse: collapse;
            margin: auto;
            background-color: var(--table);
        }

        .courseForm table, .courseForm td {
            text-align: right;
        }

        .courseForm .form {
            padding: 10px;
            width: 200px;
            font-size: 100%;
            border: none;
            border-radius: 5px;
        }

        .courseForm .course {
            font-size: 150%;
            border-radius: 5px;
            border: solid;
            border-width: 2px;
        }

        .courseForm .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.2s;
        }

        .courseForm .button:hover {
            background-color: var(--overlay);
        }

        .courseForm a {
            font-size: 120%;
            font-weight: bold;
            text-decoration: underline;
            color: rgb(26, 140, 255);
        }

    </style>

</head>

<body>

<?php
    include("session.php");
    $mysql = "SELECT idCourse FROM regcourse WHERE email  = '$email' ";
    $result = mysqli_query($conn, $mysql) or die(mysql_error());

    $courseRegistered = array();

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            array_push($courseRegistered, $row['idCourse']);      
        }
    }

        $course1 = array_search("1", $courseRegistered);
        $course2 = array_search("2", $courseRegistered);
        $course3 = array_search("3", $courseRegistered);
        $course4 = array_search("4", $courseRegistered);
        $course5 = array_search("5", $courseRegistered);

        if($course1 == ""){
            $option1 =  '<option value="1">Baking Basics</option>';
        }

        if($course2 == ""){
            $option2 =  '<option value="2">Bread Baking</option>';
        }

        if($course3 == ""){
            $option3 =  '<option value="3">Cake Decorations</option>';
        }

        if($course4 == ""){
            $option4 =  '<option value="4">Cookies Baking</option>';
        }

        if($course5 == ""){
            $option5 =  '<option value="5">Pastry Baking</option>';
        }

?>

    <div class="courseForm">

        <form action="courseProcess.php" method="POST">
            <div class="title">
                <p>Course Registration</p>
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
                    <td>Select a course: </td>
                    <td>
                        <select name="course" class="course">
                            <?php 
                                echo $option1;
                                echo $option2;
                                echo $option3;
                                echo $option4;
                                echo $option5;
                            ?>
                        </select>
                    </td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>Select duration (weeks): </td>
                    <td><input type="number" name="duration" class="form" min="1" max="5" required ></td>
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