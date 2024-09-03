<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$edad = mysqli_real_escape_string($mysqli, $_POST['edad']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// Check for empty fields
	if (empty($nombre) || empty($edad) || empty($email)) {
		if (empty($nombre)) {
			echo "<font color='red'>la casilla nombre esta vacia.</font><br/>";
		}
		
		if (empty($edad)) {
			echo "<font color='red'>la casilla edad esta vacia.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>la casilla Email esta vacia.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>regresar</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO users (`nombre`, `edad`, `email`) VALUES ('$nombre', '$edad', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Datos agregados con exito</p>";
		echo "<a href='index.php'>ver datos</a>";
	}
}
?>
</body>
</html>
