<!DOCTYPE html>
<html>
<head>
	<title>Oye Trip</title>
</head>
<body>
	
	<form action="action/register.php" method="post" >
		<fieldset>
			<label for="user" >Username: </label>
			<input type="text" name="username" id="user" required><br>
			<label for="email">Email:&#09;</label>
			<input type="email" name="email" id="email" required><br>
			<label for="pass">Password:&#09;</label>
			<input type="password" name="password" id="pass" required><br>
			<input type="submit" name="Submit">
		</fieldset>
	</form>
	
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</html>