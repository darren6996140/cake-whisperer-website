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
		}

		.header h1
		{
			margin-top: 0px;
			margin-bottom: 0px;
			padding: 2%;
		}

	</style>
	
</head>

<body>

	<div class="header">
		<h1>The Cake Whisperer</h1>
	</div>

	<center><h1>Salam Admin</h1></center>

</body>
<?php
include("footer.php");
?>
</html>