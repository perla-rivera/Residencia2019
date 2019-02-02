<?php
	
	if (isset($_POST['submit'])){
		$usuario =$_POST['usuario'];
		$clave =$_POST['clave'];
	}
?>


<!DOCTYPE html>
<html lang = "es">
	<HEAD>
		<title>Login para Alfra y Computiempo </title>>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<link rel="stylesheet" href="estilo.css">
		

	</HEAD>
	<body>
		<form  action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			<h2> Login para Alfra y Computiempo</h2>
			<input type="text" placeholder="&#128187; Usuario" name = "usuario" value = "<?php if(isset($usuario)) echo $usuario ?>">
			<input type="password" placeholder="&#128273; Contraseña" name = "clave">
			<input type="submit" value = "ingresar" name="submit">

			<?php
				include("validar-form.php");
			?>		
		</form>

		<div align="center" >
		<img src="alfra-logo.png" alt="alfra-logo">
	</div>


	</body>

</html>
