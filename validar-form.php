<?php

if (isset($_POST['submit'])){
	if(empty($usuario)){
		echo "<p class = 'error'>* Agrega el usuario </p>";
	}
	if(empty($clave)){
		echo "<p class = 'error'>* Agrega la clave </p>";
	}

	if (!empty($usuario) and !empty($clave)) { 

		session_start();
		header("location:bienvenido.php");

		

	}
}
?>
