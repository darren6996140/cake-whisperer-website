<!DOCTYPE html>
<html lang="en">
<?php
include("session.php");
?>
<head>

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
			font-family: andale mono, monospace;
			font-size: 170%;
			background: rgba(235, 235, 235, 0.5);
			text-align: center;
			transition: 0.5s;
			border-radius: 5px;
			text-decoration: none;
			color: black;
			display: flex;
		}

		.header .title
		{
			padding: 2%;
			flex: 80%;
		}

		.header .title h1
		{
			margin-top: 0px;
			margin-bottom: 0px;
			padding-left: 20%;
		}

		.header .logout
		{
			flex: 20%;
			font-size: 150%;
	  		cursor: pointer;
  			color: black;
			padding: 30px 0px 30px 15px;
			border-radius: 8px;
		}

		.header .logout a
		{
			color: red;
		}

		.header .logout a:hover{
			color: rgba(255, 0, 0, 0.5);
			transition: 0.3s;
		}

	</style>
	
</head>

<body>

	<div class="header">
		<div class="title"><h1>The Cake Whisperer</h1></div>
		<div class="logout"><a href="logout.php">Log Out</a></div>
	</div>

	<center><h1>Salam Admin</h1></center>

</body>
<?php
include("footer.php");
?>
</html>