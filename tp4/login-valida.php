<?php

//este archivo valida usuario y clave y redirecciona segun correspanda:

$usuario = $_POST["usuario"] ;
$clave = $_POST["clave"] ;

if ( $usuario=="abc" && $clave=="1234") {
	//login exitoso
	header("location:formulario2.php");

} else {
	//login fallido
	header("location:error.php");
}