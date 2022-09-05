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

		/* Number text (1/3 etc) */
		.slidesImg .numbertext {
			color: black;
			font-size: 200%;
			padding: 8px 12px;
			position: absolute;
			top: 0;
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
			background-color: rgba(255, 255, 255, 0.6);
			border-radius: 5px;
		}

		.slidesOverlay .slidesText {
			color: black;
			font-size: 170%;
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

		.coursesOverlay .coursesText {
			color: black;
			font-size: 120%;
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

		/* On smaller screens, decrease text size */
		@media screen and (max-width: 850px) {
			.prev, .next, .slidesContainer .slidesImg .slidesOverlay .slidesText{
				font-size: 100%;
			}
		}

		@media screen and (max-width: 850px) {
			.coursesContainer .coursesImg .coursesOverlay .coursesText{
				font-size: 80%;
			}
		}

		.coursesContainer{
			display: flex;
		}

		.coursesContainer img{
			flex: 33.33%;
		}

	</style>
	
</head>

<body>

	<div class="slidesContainer">

		<div class="slidesImg">
			<a href="">
			<div class="slidesOverlay">
    			<div class="slidesText">
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis magni blanditiis quo ullam obcaecati quam similique voluptates fuga illo molestiae earum amet odio, soluta in excepturi, temporibus hic repellat ipsam.
					<br><br>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, odio. Velit magni voluptate aspernatur voluptatibus asperiores fugit qui accusantium distinctio, reprehenderit in, nobis, maiores minima odio iure impedit ex quisquam.
					<br><br>
					Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus deserunt natus animi ad nam accusamus amet reiciendis? Cum consequatur consequuntur tempore! Deleniti error iste aperiam debitis nulla aut, ullam vitae.
				</div>
  			</div>
			</a><br>
			<div class="numbertext">1 / 3</div>
			<img src="https://img-cdn.hltv.org/gallerypicture/qYsvx0AQh8SnGQg1L0eUzB.jpg?ixlib=java-2.1.0&m=%2Fm.png&mw=213&mx=39&my=947&w=1600&s=e8c028b554da04af9aad283683b0ba1a">
		</div>

		<div class="slidesImg">
			<a href="">
			<div class="slidesOverlay">
    			<div class="slidesText">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro cum sit provident eaque, quasi minus fugit impedit officia natus deleniti omnis temporibus voluptatum ipsum numquam eligendi? Ullam aliquam architecto blanditiis.
					<br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quia eius odio possimus soluta doloremque incidunt in ad quas ipsa reprehenderit obcaecati laborum cupiditate quibusdam praesentium velit! Et, veritatis unde?
					<br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident in, labore alias magni itaque impedit amet. Quis, labore nesciunt id obcaecati cum sunt dolores commodi unde ipsam, recusandae reiciendis.
				</div>
  			</div>
			</a><br>
			<div class="numbertext">2 / 3</div>
			<img src="https://img-cdn.hltv.org/gallerypicture/aRNsxWJx1Agi5Fb7pdYiNa.jpg?ixlib=java-2.1.0&m=%2Fm.png&mw=213&mx=39&my=947&w=1600&s=3e845548f47cf36b31217361eb3299bb">
		</div>

		<div class="slidesImg">
			<a href="">
			<div class="slidesOverlay">
    			<div class="slidesText">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa neque eveniet vero sapiente est qui. Aliquam quibusdam temporibus illum dignissimos veritatis, totam nesciunt accusantium, soluta quas repudiandae in blanditiis animi?
					<br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam minima voluptate commodi, fugiat fuga molestias quidem sequi, aperiam ipsum sapiente officia ullam culpa, consectetur nesciunt delectus qui consequatur excepturi nisi?
					<br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fuga recusandae nostrum iure, fugiat porro magnam tempora ea maiores accusantium dolores provident modi perferendis harum labore velit placeat sed ipsum.
				</div>
  			</div>
			</a><br>
			<div class="numbertext">3 / 3</div>
			<img src="https://img-cdn.hltv.org/gallerypicture/_OjQhIl1uIPp5AWnDJcnTc.jpg?ixlib=java-2.1.0&w=1600&s=43e20da907eeeb30f0ec415a4fe884be">
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
			<a href="">
			<div class="coursesOverlay">
    			<div class="coursesText">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, cum necessitatibus qui maxime repellendus ex sequi praesentium nostrum rem optio laborum eius earum aliquid, dicta porro quasi nobis, nesciunt veritatis!
				</div>
  			</div>
			</a><br>
			<img src="https://img-cdn.hltv.org/gallerypicture/qYsvx0AQh8SnGQg1L0eUzB.jpg?ixlib=java-2.1.0&m=%2Fm.png&mw=213&mx=39&my=947&w=1600&s=e8c028b554da04af9aad283683b0ba1a">
		</div>
		<div class="coursesImg">
			<a href="">
			<div class="coursesOverlay">
    			<div class="coursesText">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quaerat eius eligendi, natus expedita fugiat, necessitatibus, harum ipsum corporis illum sequi soluta. Necessitatibus architecto nobis facilis molestiae sit harum dolorem!
				</div>
  			</div>
			</a><br>
			<img src="https://img-cdn.hltv.org/gallerypicture/qYsvx0AQh8SnGQg1L0eUzB.jpg?ixlib=java-2.1.0&m=%2Fm.png&mw=213&mx=39&my=947&w=1600&s=e8c028b554da04af9aad283683b0ba1a">
		</div>
		<div class="coursesImg">
			<a href="">
			<div class="coursesOverlay">
    			<div class="coursesText">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat expedita explicabo modi aut officiis, perferendis nemo officia impedit amet quia, delectus, cum voluptatem eveniet? Ab cupiditate laudantium obcaecati totam aliquid.
				</div>
  			</div>
			</a><br>
			<img src="https://img-cdn.hltv.org/gallerypicture/qYsvx0AQh8SnGQg1L0eUzB.jpg?ixlib=java-2.1.0&m=%2Fm.png&mw=213&mx=39&my=947&w=1600&s=e8c028b554da04af9aad283683b0ba1a">
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