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
			flex: 15%;
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

		.user {
            background-color: rgba(235, 235, 235, 0.5);
            padding-bottom: 20px;
            border-radius: 5px;
			text-align: center;
        }

		.user h1{
            font-size: 300%;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 10px 0px;
        }

		.user .userForm {
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

		.user .order {
            font-size: 150%;
            border-radius: 5px;
            border: solid;
            border-width: 2px;
			margin-right: 1%;
        }

		.user .button {
            background-color: white;
            font-size: 150%;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: 0.2s;
        }

		.user .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
        }

		.user .table{
            padding: 10px;
            border: 1px solid black;
			text-align: center;
			background-color: rgb(235, 235, 235);
			margin: auto;
			border-radius: 5px;
        }

		.user .table td{ 
			text-align: center;
			height: 25px;
			font-size: 100%;
			padding: 10px 20px;
		}

		.user .table th{
			font-size: 150%;
			text-align: center;
			font-weight: bold;
			text-decoration: underline;
			padding: 20px 10px;
		}

	</style>
	
</head>

<body>

	<div class="header">
		<div class="title"><h1>The Cake Whisperer</h1></div>
		<div class="logout"><a href="logout.php">Log Out</a></div>
	</div>

	<br>

	<div class="user">

		<h1>Database User</h1>

		<div class="userForm">
			<center>
			<form action="" method="POST">
				<select name="order" class="order">
					<option>Order By</option>
					<option value="name">Name (default)</option>
					<option value="phone">Phone Number</option>
				</select>
				<input type="submit" value="Find" name="find" class="button"> 
			</form>
			</center>
		</div>

		<?php
		
		$query = "SELECT * FROM user WHERE class=2 ORDER BY name";

		if(isset($_POST['find']))
		{

			if($_POST['order'] == ""){
				exit();
			}

			elseif($_POST['order'] == "name"){
				$query = "SELECT * FROM user WHERE class=1 ORDER BY name";
			}

			elseif($_POST['order'] == "phone"){
				$query = "SELECT * FROM user WHERE class=1 ORDER BY noPhone";
			}

			else{
				exit();
			}
		}

		
		$mysql = $query;
		$result = mysqli_query($conn, $mysql) or die(mysql_error());
		
		error_reporting(E_ERROR | E_PARSE);

		if (mysqli_num_rows ($result) > 0)
		{
			echo "<table class='table'>";
			echo "<col>"; 
			echo "<col>";
			echo "<col>"; 
			echo "<tr>";
			echo "<th>Email</th>";
			echo "<th>Name</th>";
			echo "<th>Phone Number</th>";

			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$row['email']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['noPhone']."</td>";
				echo " </tr>";
			}

			echo"</table>";
		}

		else{
			echo"";
		}

		?>
	</div>

</body>
<?php
include("footer.php");
?>
</html>