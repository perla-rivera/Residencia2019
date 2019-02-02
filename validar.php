<?php
session_start();



$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$_SESSION['usuario'] = $usuario;
//conexion de la BD 

$conexion= mysqli_connect("localhost","root","","usuariosalfra");
$consulta="SELECT * from usuarios WHERE usuario  = 'adrian' and clave ='adrian'";

$resultado = MySQLi_query($conexion, $consulta);
$fila=MySQLi_num_rows($resultado);

if($fila > 0){
	header("location:bienvenido.php");
}

else{
	echo "El usuario y/o contraseña no son correctas, vuelve a intentar";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
