<!DOCTYPE html>
<html lang="en">
<head>

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

		.selectionDot:hover, .active{
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
			background-color: rgba(255, 255, 255, 0.6);
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
			width: 33.33%;
			opacity: 0;
			transition: 0.5s ease;
			background-color: rgba(255, 255, 255, 0.6);
			border-radius: 5px;
		}

		.coursesImg{
			width: 33.33%;		
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

	</style>
	
</head>

<body>

	<div class="slidesContainer">

		<div class="slidesImg">
			<a href="userForm.php">
			<div class="slidesOverlay">
    			<div class="slidesText">
					<center><b>Welcome, to The Cake Whisperer.</b></center>
					<br><br>
					Embark on a journey to discover the wonders of baking and cuisine.
					<br><br>
					We offer courses such as Baking Basics and Pastry Baking to people from all walks of life.
					<br><br>
					Click here to register as a new user or browse our different courses by clicking next.
				</div>
  			</div>
			</a><br>
			<img src="images/baking2.jpg" >
		</div>

		<div class="slidesImg">
			<div class="slidesOverlay">
    			<div class="slidesText">
					<b>Baking Basics</b>
					<br><br>
					This course teaches you all the basics about baking that every beginner should master before tackling more advanced courses.
					<br><br>
					Only RM100 a week for endless knowledge. Classes start every Monday.
				</div>
  			</div><br>
			<img src="images/bakingBasics.jpg">
		</div>

		<div class="slidesImg">
			<div class="slidesOverlay">
    			<div class="slidesText">
				<b>Bread Baking</b>
					<br><br>
					This course teaches you to bake breads that rival that of bakeries around you so that you will never buy any bread again, ever.
					<br><br>
					Only RM150 a week for everlasting homemade breads. Classes start every Tuesday.
				</div>
  			</div><br>
			<img src="images/breadBaking.jpg">
		</div>

		<a class="prev" onclick="plusSlides(-1)">❮</a>
		<a class="next" onclick="plusSlides(1)">❯</a>

		<br>

		<div style="text-align: center;">
			<span class="selectionDot" onclick="currentSlide(1)"></span>
			<span class="selectionDot" onclick="currentSlide(2)"></span>
			<span class="selectionDot" onclick="currentSlide(3)"></span>
		</div>

	</div>

	<br>

	<div class="coursesContainer">

		<div class="coursesImg">
			<div class="coursesOverlay">
    			<div class="coursesText">
					<b>Cake Decorations</b>
				</div>
  			</div><br>
			<img src="images/cakeDecorations.jpg">
		</div>

		<div class="coursesImg">
			<div class="coursesOverlay">
    			<div class="coursesText">
					<b>Cookies Baking</b>
				</div>
  			</div><br>
			<img src="images/cookiesBaking.jpg">
		</div>

		<div class="coursesImg">
			<div class="coursesOverlay">
    			<div class="coursesText">
					<b>Pastry Baking</b>
				</div>
  			</div><br>
			<img src="images/pastryBaking.jpg">
		</div>

	</div>

	<br>

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

</html>