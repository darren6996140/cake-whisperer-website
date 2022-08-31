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

		.header #left
		{
			flex: 9%;
		}

		.header #center
		{
			flex: 82%;
			color: white;
			border-radius: 8px;
		}

		.header #right
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

		.login:hover{
			color: rgba(75, 171, 255, 0.75);
			transition: 0.2s;
		}

		.sidebar a:hover{
			color: rgba(0, 0, 0, 0.500);
			transition: 0.2s;
		}

	</style>

</head>

<body>

<div id="sidebar" class="sidebar">
  <button class="close" onclick="closeNav()" >×</button>
  <a href="#" >longasslink</a>
  <a href="#" >longasslink</a>
  <a href="#" >longasslink</a>
</div>

<div class="header">

    <div id="left">
		<button  onclick="openNav()" class="open">☰</button>
	</div>

    <div id="center">
		<h1>The Cake Whisperer</h1>
  	</div>

	<div id="right">
		<a href="loginPage.php" class="login">Login</a>  
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