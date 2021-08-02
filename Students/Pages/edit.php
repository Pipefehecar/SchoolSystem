<!DOCTYPE html>
<html>
<head>
	<title>Schoolar Scoring System</title>
</head>
<body>
<h1>Edit a student</h1>
<form method="POST" action="../Controller/edit.php">
	<input type="hidden" name="id" value="">
	First Name <br>
	<input type="text" name="firstname" required="" autocomplete="off" placeholder="First name"><br><br>
	Last Name <br>
	<input type="text" name="lastname" required="" autocomplete="off" placeholder="Last name"><br><br>
	Identification <br>
	<input type="text" name="document" required="" autocomplete="off" placeholder="Identificaciton number"><br><br>
	Email <br>
	<input type="Email" name="email" required="" autocomplete="off" placeholder="Email"><br><br>
	Subject <br>
	<select>
		<option>Seleccione</option>
		<option value="Ingles">English</option>
		<option value="Español">Spanish</option>
		<option value="Ciencias">Science</option>
	</select><br><br>
	Teacher <br>
	<select>
		<option>Seleccione</option>
		<option value="Ingles">Estefania Lopez</option>
		<option value="Español">Andres Ferreira</option>
		<option value="Ciencias">Rosmery Pelaez</option>
	</select><br><br>
	Average <br>
	<input type="text" name="average" required="" autocomplete="off"
	placeholder="Average"><br><br>
	<input type="submit" name="edit">

</form>
</body>
</html>