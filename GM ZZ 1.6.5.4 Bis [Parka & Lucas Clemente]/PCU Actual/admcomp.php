<?php
//Includes
include 'recursos/configuracion.php';

//Datos del formulario
$web_admin_nombre = $web_admin_clave = $web_admin_clave2 = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$web_admin_nombre	= test_input($_POST["NombreUsuario"]);
	$web_admin_clave	= test_input($_POST["interno_admin_clave"]);
	$web_admin_clave2	= test_input($_POST["interno_admin_clave2"]);

	if(empty($web_admin_clave) || empty($web_admin_clave2))
	{
		//Si no se introduce el usuario la clave o ambos.
		echo"<script>alert('El usuario o la clave no han sido ingresados.'); window.location.href=\"index.php\"</script>";
	}
	else
	{
		//Hacer la consulta de la base de datos.
		$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT `niveladmin` FROM `zz_usuarios` WHERE nombre='".$web_admin_nombre."' AND clave=md5('".$web_admin_clave."') AND clave2='".$web_admin_clave2."';");

		//Obtener la cantidad de filas, de lo contrario no existe el usuario.
		if(mysqli_num_rows($MysqlResultado))
		{
			//Extraer todos los datos del jugador.
			$Fila = mysqli_fetch_array($MysqlResultado);
			
			//Almacenar la clave y nivel administrativo del usuario.
			$mysql_user_clave = test_input($Fila["clave"]);
			$mysql_user_clave_admin = test_input($Fila["clave2"]);
			$mysql_admin_nivel = test_input($Fila["niveladmin"]);
			
			$_SESSION['secretoNivelAdmin'] = $mysql_admin_nivel;
			$_SESSION['secretoNombreAdmin'] = $web_admin_nombre;
			$host  = $_SERVER['HTTP_HOST'];
			$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			header("Location: http://$host$uri/administrar.php");
		}
		else
		{
			//No existe el usuario.
			echo"<script>alert('Las contraseñas son incorrectas.'); window.location.href=\"/index.php\"</script>";
		}
	}
}
else
{
	//Forzar redireccion al login si se intenta acceder al archivo comprobar.php direcctamente.
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	header("Location: http://$host$uri/index.php");
	exit;
}
?>