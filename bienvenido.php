<?php
	$conexion= session_start();
	$Conexion2 =mysqli_connect("localhost","root","","usuariosalfra");
	
	
	$usuario1= $_SESSION['usuario']
?>

<!DOCTYPE html>
<html lang = "es">
	<HEAD>	
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta charset="iso-8859-1">

		<title>Control de servicio</title>
		<link rel="stylesheet" href="estilo002.css">

	 </HEAD>

		<body>
			<h2> Usuario:  <?php echo $_SESSION['usuario']?> </h2>
			<a href="cerrar-sesion.php">Cerrar sesión</a>

			<br>
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Usuario</td>
						<td>Titulo</td>
						<td>Detalles</td>
						<td>Estado</td>
						<td>Comentario</td>
					</tr>
					<?php
						$sql= "SELECT * from tareas where Usuario = '$usuario1'";
						$result = mysqli_query($Conexion2, $sql);

						while($mostrar =mysqli_fetch_array($result)){
					?>
					


					<tr>
						<td><?php echo $mostrar["ID"]?></td>
						<td><?php echo $mostrar["Usuario"]?></td>
						<td><?php echo $mostrar["Titulo"]?></td>
						<td><?php echo $mostrar["Detalles"]?></td>
						<td><?php echo $mostrar['Estado']?></td>
						<td><?php echo $mostrar['Comentario']?></td>
					</tr>
					<?php
				}

					?>
				</table>
		</body>


</html>