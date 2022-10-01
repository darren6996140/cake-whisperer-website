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

		function printCourse1Big(){
			echo '<div class="slidesImg">';
			echo '<a href="yourCourses.php">';
			echo '<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'You are registered to: <b>Baking Basics</b>';
			echo '<br><br>';
			echo 'Click here to check the timetable for this course.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/bakingBasics.jpg">';
			echo '</div>';
		}

		function printCourse2Big(){
			echo '<div class="slidesImg">';
			echo '<a href="yourCourses.php">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'You are registered to: <b>Bread Baking</b>';
			echo '<br><br>';
			echo 'Click here to check the timetable for this course.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/breadBaking.jpg">';
			echo '</div>';
		}

		function printCourse3Big(){
			echo '<div class="slidesImg">';
			echo '<a href="yourCourses.php">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'You are registered to: <b>Cake Decorations</b>';
			echo '<br><br>';
			echo 'Click here to check the timetable for this course.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/cakeDecorations.jpg">';
			echo '</div>';
		}

		function printCourse4Big(){
			echo '<div class="slidesImg">';
			echo '<a href="yourCourses.php">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'You are registered to: <b>Cookies Baking</b>';
			echo '<br><br>';
			echo 'Click here to check the timetable for this course.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/cookiesBaking.jpg">';
			echo '</div>';
		}

		function printCourse5Big(){
			echo '<div class="slidesImg">';
			echo '<a href="yourCourses.php">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'You are registered to: <b>Pastry Baking</b>';
			echo '<br><br>';
			echo 'Click here to check the timetable for this course.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/pastryBaking.jpg">';
			echo '</div>';
		}

		function printDefaultBig(){
			echo '<div class="slidesImg">';
			echo '<a href="courseForm.php">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'It seems like you are not registered to any classes yet, click here to register to our classes now!';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/baking0.jpg">';
			echo '</div>';
		}

		function printCourse1Small(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Baking Basics';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/bakingBasics.jpg">';
			echo '</div>';
		}

		function printCourse2Small(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Bread Baking';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/breadBaking.jpg">';
			echo '</div>';
		}

		function printCourse3Small(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Cake Decorations';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/cakeDecorations.jpg">';
			echo '</div>';
		}

		function printCourse4Small(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Cookies Baking';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/cookiesBaking.jpg">';
			echo '</div>';
		}

		function printCourse5Small(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Pastry Baking';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/pastryBaking.jpg">';
			echo '</div>';
		}

	?>

	<style>
		.slidesImg img , .coursesImg img {
			display: block;
			width: 70%;
			margin-left: auto;
			margin-right: auto;
			animation-name: fadein;
  			animation-duration: 1.0s;
			transition: 0.5s ease;
			border-radius: 5px;
		}

		.slidesContainer, .coursesContainer {
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
			color: var(--text);
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
			background-color: var(--arrowHover);
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

		.slidesImg:hover .slidesOverlay , .coursesImg:hover .coursesOverlay{
			opacity: 1;
		}

		.slidesOverlay {
			display: block;
			position: absolute;
			height: 95%;
			width: 100%;
			opacity: 0;
			transition: 0.5s ease;
			background-color: var(--overlay);
			border-radius: 5px;
		}

		.slidesOverlay .slidesText {
			color: var(--text);
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			text-align: left;
			transition: 0.5s ease;
		}

		.coursesOverlay {
			position: absolute;
			height: 110%;

			<?php
			if($numCourses == 0){
				echo 'width: 20%;';
			}
			elseif($numCourses == 1){
				echo 'width: 25%;';
			}
			elseif($numCourses == 2){
				echo 'width: 33.33%;';
			}
			elseif($numCourses == 3){
				echo 'width: 50%;';
			}
			else{
				echo 'width; 33.33%;';
			}
			?>

			opacity: 0;
			transition: 0.5s ease;
			background-color: var(--overlay);
			border-radius: 5px;
		}

		.coursesOverlay .coursesText {
			color: var(--text);
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			text-align: left;
			transition: 0.5s ease;
		}

		.slidesContainer .slidesImg .slidesOverlay .slidesText{
			font-size: 200%;
		}

		.coursesContainer .coursesImg .coursesOverlay .coursesText{
			font-size: 220%;
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

		@media screen and (max-width: 850px) {
			.coursesContainer .coursesImg .coursesOverlay .coursesText{
				font-size: 150%;
			}
		}

		.coursesContainer{
			display: flex;
		}

		.coursesImg{
			<?php
			if($numCourses == 0){
				echo 'width: 20%;';
			}
			elseif($numCourses == 1){
				echo 'width: 25%;';
			}
			elseif($numCourses == 2){
				echo 'width: 33.33%;';
			}
			elseif($numCourses == 3){
				echo 'width: 50%;';
			}
			else{
				echo 'width; 33.33%;';
			}
			?>
		}

		.bodyTitle{
			color: var(--text);
			text-align: center;
			font-size: 300%;
			font-family: andale mono, monospace;
			font-weight: bold;
			background-color: var(--overlay);
			margin-left: 25%;
			margin-right: 25%;
			padding-top: 2%;
			padding-bottom: 2%;
			border-radius: 5px;
		}

		.bodyTitleSmall{
			color: var(--text);
			text-align: center;
			font-size: 200%;
			font-family: andale mono, monospace;
			font-weight: bold;
			background-color: var(--overlay);
			margin-left: 30%;
			margin-right: 30%;
			padding: 2%;
			border-radius: 5px;
			text-decoration: underline;
		}
		

	</style>
	
</head>

<body>

	<h1 class="bodyTitle">Your Registered Courses</h1>

	<div class="slidesContainer">

		<?php
		if($course1 != ""){
            printCourse1Big();
        }

        if($course2 != ""){
            printCourse2Big();
        }

        if($course3 != ""){
            printCourse3Big();
        }

        if($course4 != ""){
            printCourse4Big();
        }

        if($course5 != ""){
            printCourse5Big();
        }

		else{
			printDefaultBig();
		}
		?>

		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

		<br>

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
			}		
			?>

		</div>

	</div>

	<br>

	<h1 class="bodyTitle">Other Courses Offered</h1>

	<div class="coursesContainer">
		
		<?php

		if($course1 == ""){
            printCourse1Small();
        }

        if($course2 == ""){
            printCourse2Small();
        }

        if($course3 == ""){
            printCourse3Small();
        }

        if($course4 == ""){
            printCourse4Small();
        }

        if($course5 == ""){
            printCourse5Small();
        }

		else{
			echo'<h1 class="bodyTitleSmall">You Have Registered For All The Classes</h1>';
		}

		?>

	</div>

	<br><br>

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