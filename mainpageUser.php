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
			//!tbd
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
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
			//!tbd
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
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
			//!tbd
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
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
			//!tbd
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
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
			//!tbd
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo'<img src="images/pastryBaking.jpg">';
			echo '</div>';
		}

		//!tbd
		function printDefaultBig(){
			echo '<div class="slidesImg">';
			echo '<a href="">';
			echo'<div class="slidesOverlay">';
			echo '<div class="slidesText">';
			echo 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.';
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

		//!tbd
		function printDefaultSmall(){
			echo '<div class="coursesImg">';
			echo '<a href="courseForm.php">';
			echo '<div class="coursesOverlay">';
			echo '<div class="coursesText">';
			echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, cum necessitatibus qui maxime repellendus ex sequi praesentium nostrum rem optio laborum eius earum aliquid, dicta porro quasi nobis, nesciunt veritatis!';
			echo '</div>';
			echo '</div>';
			echo '</a><br>';
			echo '<img src="images/baking1.jpg">';
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

		/* Next & previous buttons */
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

		/* Position the "next button" to the right */
		.next {
			right: 0;
			border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
			background-color: rgba(0, 0, 0, 0.3);
		}

		/* The dots/bullets/indicators */
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

		/* slight issue here */
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
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 5px;
		}

		.slidesOverlay .slidesText {
			color: black;
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
			if($numCourses == 2){
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
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 5px;
		}

		.coursesOverlay .coursesText {
			color: black;
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

		/* On smaller screens, decrease text size */
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
			if($numCourses == 2){
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
				echo '<span class="selectionDot" onclick="currentSlide(2)"></span>';
				echo '<span class="selectionDot" onclick="currentSlide(3)"></span>';
			}		
			?>

		</div>

	</div>

	<br>

	<div class="coursesContainer">
		
		<?php
		//! attention (keep courses < 3 at bottom of page)
		// if($numCourses < 3){
		// }

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

		// else{
		// 	printDefaultSmall();
		// }
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