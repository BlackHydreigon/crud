<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['actualizar'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$edad = mysqli_real_escape_string($mysqli, $_POST['edad']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Check for empty fields
	if (empty($nombre) || empty($edad) || empty($email)) {
		if (empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($edad)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE users SET `nombre` = '$nombre', `edad` = '$edad', `email` = '$email' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>datos actualizados con exito</p>";
		echo "<a href='index.php'>ver resultados</a>";
	}
}
