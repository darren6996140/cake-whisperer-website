<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>The Cake Whisperer</title>
	<!--title logo-->
	<link rel = "icon" href = "https://cdn.onlinewebfonts.com/svg/img_425531.png" type = "image/x-icon">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>

		body
		{
			padding: 10px;
			font-family: Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif;
			margin: 0;
			background-image: url('images/baking<?php echo(rand(0,4)); ?>.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		.header
		{
			display: flex;
			font-family: andale mono, monospace;
			font-size: 170%;
			background: rgba(235, 235, 235, 0.5);
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
			color: black;
			border-radius: 8px;
		}

		.header .center a
		{
			color: black;
			text-decoration: none;
		}

		.header .right
		{
			flex: 9%;
			font-size: 170%;
	  		cursor: pointer;
  			color: black;
			padding: 30px 25px 30px 15px;
			border-radius: 8px;
		}

		.header .right a
		{
			color: black;
		}

		.header .open {
			font-size: 170%;
	  		cursor: pointer;
  			background-color: rgba(235, 235, 235, 0.0);
  			color: black;
  			padding: 30px 15px;
  			border: none;
			border-radius: 8px;
		}

		.header .login{
			color: rgb(75, 171, 255);
			text-decoration: underline;
		}

		.sidebar {
			height: 100%;
			position: fixed;
			width: 0;
			top: 0;
			left: 0;
			background-color: rgba(235, 235, 235, 0.95);
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
			background-color: rgba(235, 235, 235, 0.0);
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
			color: rgba(0, 0, 0, 0.5);
			transition: 0.2s;
		}

		.close:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

		.login:hover{
			color: rgba(0, 0, 0, 0.5);
			transition: 0.2s;
		}

		.sidebar a:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

		.center a:hover{
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

	</style>

</head>

<body>

<div id="sidebar" class="sidebar">
	<button class="close" onclick="closeNav()" >×</button>
	<h1>Courses</h1>
		<a href="bakingBasics.php" >Baking Basics</a>
		<a href="breadBaking.php" >Bread Baking</a>
		<a href="cakeDecorations.php" >Cake Decorations</a>
		<a href="cookiesBaking.php" >Cookies Baking</a>
		<a href="pastryBaking.php" >Pastry Baking</a>
	<h1>Our Company</h1>
		<a href="aboutus.php">About Us</a>
		<a href="workworkwork.php">Work</a>
		<a href="privacy.php">Privacy Notice</a>
</div>

<div class="header">

    <div class="left">
		<button onclick="openNav()" class="open">☰</button>
	</div>

    <div class="center">
		<h1><a href="index.php">The Cake Whisperer</a></h1>
  	</div>

	<div class="right">
		<a href="loginForm.php" class="login">Login</a>  
  	</div>

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

	</script>
	
	<br> 

</body>
</html>