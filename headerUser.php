<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>The Cake Whisperer</title>
	<!--title logo-->
	<link rel = "icon" href = "http://cdn.onlinewebfonts.com/svg/img_425531.png" type = "image/x-icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>

		body
		{
			background: rgb(235, 235, 235);
			padding: 10px;
			font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
			margin: 0;
		} 

		.header
		{
			display: flex;
			font-family: andale mono, monospace;
			font-size: 170%;
			background: rgb(0, 72, 106);
			text-align: center;
			transition: 0.5s;
			border-radius: 8px;
		}

		.header .left
		{
			flex: 9%;
		}

		.header .center
		{
			flex: 82%;
			color: white;
			border-radius: 8px;
		}

		.header .right
		{
			flex: 9%;
			font-size: 170%;
	  		cursor: pointer;
  			background-color: rgb(0, 72, 106);
  			color: white;
			padding: 30px 25px 30px 15px;
			border-radius: 8px;
		}

		.header .open {
			font-size: 170%;
	  		cursor: pointer;
  			background-color: rgb(0, 72, 106);
  			color: white;
  			padding: 30px 15px;
  			border: none;
			border-radius: 8px;
		}

		.header .profile, .header img, .header button{
			width: 50px;
			height: 50px;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

		.sidebar {
			height: 100%;
			position: fixed;
			width: 0;
			top: 0;
			left: 0;
			background-color: rgb(235, 235, 235);
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
			z-index: 1;
		}

		.sidebar a {
			padding: 8px 8px 8px 30px;
			font-size: 170%;
			display: block;
			transition: 0.5s;
			cursor: pointer;
			overflow-wrap: normal;
		}

		.sidebar .close {
			position: absolute;
			top: 0;
			right: 15px;
			font-size: 250%;
			transition: 0.5s;
			cursor: pointer;
			background-color: rgb(235, 235, 235);
  			color: black;
			border: none;
			padding: 10px 0px;
		}

		.sidebar a{
			color: rgba(75, 171, 255);
			text-decoration: underline;
		}

		@media screen and (max-width: 850px) {
  			.sidebar {padding-top: 25px;}
  			.sidebar a {font-size: 18px;}
			.sidebar .close{font-size: 25px;}
			.header {font-size: 130%;}
		}

		.open:hover{
			color: rgba(220, 220, 220, 0.700);
			transition: 0.2s;
		}

		.close:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

		.profile:hover{
			color: rgba(75, 171, 255, 0.75);
			transition: 0.2s;
		}

		.sidebar a:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

		.sidebar h1{
			margin-top: 0px;
			margin-bottom: 0px;
			padding: 8px 8px 8px 30px;
			font-size: 250%;
			font-weight: bold;
			display: block;
			transition: 0.5s;
			cursor: pointer;
			overflow-wrap: normal;
		}

		.show {
			display: block;
		}

		.dropdown {
			position: relative;
			display: inline-block;
		}

		.dropdownContent {
			display: none;
			position: absolute;
			background-color: #f1f1f1;
			min-width: 160px;
			overflow: auto;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.profile:hover, .profile:focus {
			background-color: #2980B9;
		}

		.dropdownContent a {
			color: black;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
		}

		.dropdown a:hover {
			background-color: #ddd;
		}

		.show {
			display: block;
		}

		.profile {
			background-color: #3498DB;
			color: white;
			padding: 16px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}

	</style>

</head>

<body>

<div id="sidebar" class="sidebar">
	<button class="close" onclick="closeNav()" >×</button>
	<h1>Courses</h1>
		<a href="#" >Course 1</a>
		<a href="#" >Course 2</a>
		<a href="#" >Course 3</a>
		<a href="#" >Course 4</a>
		<a href="#" >Course 5</a>
	<h1>Our Company</h1>
		<a href="#">About Us</a>
		<a href="#">Work</a>
		<a href="#">Privacy Notice</a>
</div>

<div class="header">

    <div class="left">
		<button onclick="openNav()" class="open">☰</button>
	</div>

    <div class="center">
		<h1>The Cake Whisperer</h1>
  	</div>

	<div class="right">
		<div class="dropdown">
		<button onclick="dropdown()" class="profile"><img src="images/defaultProfile.png" alt="profile picture"></button>
			<div id="dropdownContent" class="dropdownContent">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Contact</a>
			</div>
		</div>
  	</div>

	  <!-- https://www.w3schools.com/howto/howto_js_dropdown.asp -->

</div>

<script>
	function openNav() {
		document.getElementById("sidebar").style.width = "20%";
		document.getElementById("main").style.marginLeft = "20%";
	}

	function closeNav() {
		document.getElementById("sidebar").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";
	}

	function dropdown() {
      document.getElementById("dropdownContent").classList.toggle("show");
    }

    window.onclick = function(event) {

		if (!event.target.matches('.profile')) {

			var dropdowns = document.getElementsByClassName("dropdownContent");
			var i;
		
			for (i = 0; i < dropdowns.length; i++) {
				
				var openDropdown = dropdowns[i];
				
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}

	</script>
	
	<br> 

</body>
</html>