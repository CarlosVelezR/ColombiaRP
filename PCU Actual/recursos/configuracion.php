<?php
//variables de la base de datos.
$MysqlHost	= "HOST";
$MysqlUser	= "USUARIO";
$MysqlClave	= "CLAVE";
$MysqlDB	= "BASE DE DATOS";

//Conectar con la base de datos.
$MysqlEnlace = mysqli_connect($MysqlHost,$MysqlUser,$MysqlClave,$MysqlDB);

//Iniciar y Reanudar "$_SESSION".
session_start();

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

//Funcion cambiada por header.
function redirect($page, $time = 2) {
	refresh();
	if($time > 1000){
		usleep($time);
	} else {
		sleep($time);
	}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$page.'">';
	exit;
}

function refresh(){
	echo str_repeat(' ', 1024 * 64);
	flush();
}
?>