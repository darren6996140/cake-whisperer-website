<!DOCTYPE html>
<html lang="en">
<?php
include("session.php");
include("headerUser.php");
?>
<head>
    <?php
        $mysql = "SELECT idCourse FROM regcourse WHERE email  = '$email'";
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

        $numCourses = count($courseRegistered);

        function printCourse1(){
			echo '<div class="slidesImg">';
			echo '<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Baking Basics';
			echo '<br><br>';
			echo '1200 hours - 1400 hours';
			echo '</div>';
			echo '</div>';
			echo '<img src="images/bakingBasics.jpg">';
			echo '</div>';
		}

		function printCourse2(){
			echo '<div class="slidesImg">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Bread Baking';
			echo '<br><br>';
			echo '1500 hours - 1700 hours';
			echo '</div>';
			echo '</div>';
			echo'<img src="images/breadBaking.jpg">';
			echo '</div>';
		}

		function printCourse3(){
			echo '<div class="slidesImg">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Cake Decorations';
			echo '<br><br>';
			echo '1300 hours - 1500 hours';
			echo '</div>';
			echo '</div>';
			echo'<img src="images/cakeDecorations.jpg">';
			echo '</div>';
		}

		function printCourse4(){
			echo '<div class="slidesImg">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Cookies Baking';
			echo '<br><br>';
			echo '1600 hours - 1800 hours';
			echo '</div>';
			echo '</div>';
			echo'<img src="images/cookiesBaking.jpg">';
			echo '</div>';
		}

		function printCourse5(){
			echo '<div class="slidesImg">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Pastry Baking';
			echo '<br><br>';
			echo '1000 hours - 1200 hours';
			echo '</div>';
			echo '</div>';
			echo'<img src="images/pastryBaking.jpg">';
			echo '</div>';
		}

    ?>

	<style>
		.slidesImg img{
			display: block;
			width: 70%;
			margin-left: auto;
			margin-right: auto;
			animation-name: fadein;
  			animation-duration: 1.0s;
			transition: 0.5s ease;
			border-radius: 5px;
		}

		.slidesContainer{
			position: relative;
			margin: auto;
			transition: 0.5s ease;
			opacity: 1;
			border-radius: 5px;
		}

		.prev, .next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			padding: 16px;
			margin-top: -22px;
			color: black;
			font-weight: bold;
			font-size: 250%;
			transition: 0.3s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		.prev:hover, .next:hover {
			background-color: rgba(0, 0, 0, 0.3);
		}

		.slidesContainer .selectionDot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.5s ease;
		}

		.active, .selectionDot:hover {
			background-color: rgb(113, 113, 113);
		}

		.slidesImg:hover .slidesOverlay{
			opacity: 1;
		}

		.slidesOverlay {
			display: block;
			position: absolute;
			height: 95%;
			width: 100%;
			opacity: 0;
			transition: 0.5s ease;
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 5px;
		}

		.slidesOverlay .slidesText {
			color: black;
			font-size: 250%;
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			text-align: left;
			transition: 0.5s ease;
		}

		@keyframes fadein {
			from {
				opacity: 0.3
			}

			to {
				opacity: 1
			}
		}

		@media screen and (max-width: 850px) {
			.prev, .next, .slidesContainer .slidesImg .slidesOverlay .slidesText{
				font-size: 100%;
			}
		}

		.bodyTitle{
			color: black;
			text-align: center;
			font-size: 300%;
			font-family: andale mono, monospace;
			font-weight: bold;
			background-color: rgba(255, 255, 255, 0.5);
			margin-left: 25%;
			margin-right: 25%;
			padding-top: 2%;
			padding-bottom: 2%;
			border-radius: 5px;
		}

		.timetable{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: 0px 25%;
			border-radius: 5px;
        }

		.timetable td{ 
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
			background-color: #ebebeb;
		}

		.timetable .time{ 
			background-color: #ebebeb;
		}

		.timetable .class{ 
			background-color: #bbb;
		}

		.timetable th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}

	</style>
</head>

<body>

	<h1 class="bodyTitle">Your Registered Courses</h1>

    <div class="slidesContainer">

        <?php
			if($course1 != ""){
                printCourse1();
            }

            if($course2 != ""){
                printCourse2();
            }
 
            if($course3 != ""){
                printCourse3();
            }

            if($course4 != ""){
                printCourse4();
            }

            if($course5 != ""){
                printCourse5();
            }
        ?>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

		<br><br>

		<div style="text-align: center;">

			<?php
			if ($numCourses == 1){
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
			}
			elseif ($numCourses == 2){
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';				
			}
			elseif ($numCourses == 3){
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(3)"></span>';
			}
			elseif ($numCourses == 4){
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(3)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(4)"></span>';
			}
			elseif ($numCourses == 5){
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(3)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(4)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(5)"></span>';
			}
			else{
				echo '<span class="selectionDot" onclick="currentSlide(1)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(3)"></span>';
			}		
			?>

		</div>

		<br><br>

    </div>

	<div class="timetable">
			<center>
			<table class='table'>
				<col>
				<col>
				<col>
				<col>
				<col>

				<th>Time</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>

				<tr>
					<td class="time">10:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<?php
					if($course5 != ""){
						echo'<td class="class">Pastry Baking</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
				</tr><tr>
					<td class="time">11:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<?php
					if($course5 != ""){
						echo'<td class="class">10:00 - 12:00</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
				</tr><tr>
					<td class="time">12:00</td>
					<?php
					if($course1 != ""){
						echo'<td class="class">Baking Basics</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr><tr>

					<td class="time">13:00</td>
					<?php
					if($course1 != ""){
						echo'<td class="class">12:00 - 14:00</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<?php
					if($course3 != ""){
						echo'<td class="class">Cake Decorations</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<td></td>

				</tr><tr>
					<td class="time">14:00</td>
					<td></td>
					<td></td>
					<?php
					if($course3 != ""){
						echo'<td class="class">13:00 - 15:00</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<td></td>

				</tr><tr>
					<td class="time">15:00</td>
					<td></td>
					<?php
					if($course2 != ""){
						echo'<td class="class">Bread Baking</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<td></td>
					<td></td>

				</tr><tr>
					<td class="time">16:00</td>
					<td></td>
					<?php
					if($course2 != ""){
						echo'<td class="class">15:00 - 17:00</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					<?php
					if($course4 != ""){
						echo'<td class="class">Cookies Baking</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>

				</tr><tr>
					<td class="time">17:00</td>
					<td></td>
					<td></td>
					<td></td>
					<?php
					if($course4 != ""){
						echo'<td class="class">16:00 - 18:00</td>';
					}
					else{
						echo'<td></td>';
					}
					?>
					<td></td>
					
				</tr><tr>
					<td class="time">18:00</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			</center>
		</div>

    <script>
		let slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			let i;
			let slides = document.getElementsByClassName("slidesImg");
			let dots = document.getElementsByClassName("selectionDot");

			if (n > slides.length) {
				slideIndex = 1
			}

			if (n < 1) {
				slideIndex = slides.length
			}

			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}

			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}

			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>

</body>
<?php
include("footer.php");
?>
</html>