<!DOCTYPE html>
<html>
<head>
	<title>Schoolar Scoring System</title>
</head>
<body>
<h1>Register an admin</h1>
<form method="POST" action="../Controller/add.php">
	
	First Name <br>
	<input type="text" name="firstname" required="" autocomplete="off" placeholder="First name"><br><br>
	Last Name <br>
	<input type="text" name="lastname" required="" autocomplete="off" placeholder="Last name"><br><br>
	Username <br>
	<input type="text" name="username" required="" autocomplete="off" placeholder="username"><br><br>
	Password <br>
	<input type="password" name="password" required="" autocomplete="off" placeholder="secure password"><br><br>
	
	<input type="submit" value="Register an admin">

</form>
</body>
</html>