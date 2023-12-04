<html>
<head>
	<title>Add Users</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		a {
			text-decoration: none;
			color: #007bff;
		}

		a:hover {
			text-decoration: underline;
		}

		form {
			width: 25%;
			margin-top: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		td {
			padding: 8px;
		}

		input[type="text"] {
			width: 100%;
			padding: 8px;
			box-sizing: border-box;
		}

		input[type="submit"] {
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #0056b3;
		}
	</style>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table>
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
