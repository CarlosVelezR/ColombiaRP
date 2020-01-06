<?php
//Includes
include 'recursos/configuracion.php';

//Datos del formulario
$web_user_name = $web_user_clave = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$web_user_name = test_input($_POST["pcu_user_name"]);
	$web_user_clave = test_input($_POST["pcu_user_clave"]);

	if(empty($web_user_name) || empty($web_user_clave))
	{
		//Si no se introduce el usuario la clave o ambos.
		echo"<script>alert('El usuario o la clave no han sido ingresados.'); window.location.href=\"login.php\"</script>";
	}
	else
	{
		//Hacer la consulta de la base de datos.
		$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT clave2, niveladmin, caracter, respeto, nivel FROM zz_usuarios WHERE nombre='".$web_user_name."' AND clave=md5('".$web_user_clave."');");
		//Obtener la cantidad de filas, de lo contrario no existe el usuario.
		if(mysqli_num_rows($MysqlResultado))
		{
			//Extraer todos los datos del jugador.
			$Fila = mysqli_fetch_array($MysqlResultado);
			
			//Almacenar la clave y nivel administrativo del usuario.
			$mysql_user_clave_admin = test_input($Fila["clave2"]);
			$mysql_user_nivel_admin = test_input($Fila["niveladmin"]);
			
			//Almacenar datos en cookie.
			$_SESSION["NombreUsuario"] = $web_user_name;
			$_SESSION["AccesoUsuario"] = $web_user_clave;
			$_SESSION["normalAdmin"] = $mysql_user_nivel_admin;
			$_SESSION["Nivel"] = test_input($Fila["nivel"]);
			$_SESSION["Respeto"] = test_input($Fila["respeto"]);
			$_SESSION["Skin"] = test_input($Fila["caracter"]);
			
			$host = $_SERVER['HTTP_HOST'];
			$uri = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
			header("Location: http://$host$uri/index.php");
			mysqli_close($MysqlEnlace);
			exit;		
		}
		else 
		{
			//No existe el usuario o contraseña incorrecta.
			echo"<script>alert('El usuario o la contraseña no son validos!'); window.location.href=\"/login\"</script>";
		}
	}
}
else 
{
	//Forzar redireccion al login si se intenta acceder al archivo comprobar.php direcctamente.
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	header("Location: http://$host$uri/login");
	exit;
}

?>