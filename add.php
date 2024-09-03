<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Agregar registro</h2>
	<p>
		<a href="index.php">Inicio</a>
	</p>

	<form action="addAction.php" method="post" name="agregar">
		<table width="25%" border="0">
			<tr> 
				<td>nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>edad</td>
				<td><input type="text" name="edad"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

