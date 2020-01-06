<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pcu zonazerorp">
    <meta name="author" content="Parka">
    <link rel="icon" href="../../favicon.ico">

    <title>PCU | ZonaZerorp.com</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
	<body>
	<?php
	//Includes
	include 'recursos/configuracion.php';
	include 'recursos/complementos.php';
	
	$interno_secreto_nivel_admin = $_SESSION['secretoNivelAdmin'];
	$interno_secreto_nombre_admin = $_SESSION['secretoNombreAdmin'];
	if(!$interno_secreto_nivel_admin)
	{
	?>
			<link rel="stylesheet" href="../../css/peradmin.css">
		<?php
		echo
		'
			<div class="container">
				<form action="admcomp.php" method="post" class="form-signin" role="form">
					<h2 class="form-signin-heading">Acceso Administrativo</h2>
					<input type="password" name="interno_admin_clave" class="form-control" placeholder="Contraseña" required>
					<input type="password" name="interno_admin_clave2" class="form-control" placeholder="Contraseña Administrativa" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
				</form>
			</div> <!-- /container -->
		';
	}
	else
	{
		?>
			<div class="container-fluid">
				<div class="col-lg-4">
					<div class="alert alert-success">
						<h4>Bienvenido <small><?=RemoverPiso($interno_secreto_nombre_admin);?></small></h4> 
					</div>
				</div>

			</div><!-- /container -->
			
	<div class="panel panel-primary">
	<div class="panel-heading"><h3 class="panel-title">Opciones</h3> </div>
	<div class="panel-body">
		<ul class="list-group">
			<div class="container">
			<div class="col-lg-6">
			<h4>Lista de lideres de facciones:</h4>
			<table class="table table-bordered">
			<thead>
			<tr>
			<th>Nombre</th>
			<th>Faccion</th>
			<th>Ultima Conexión</th>
			<th>Acción</th>
			</tr>
			</thead>
			<?php
			$secreto_mysql_consulta = mysqli_query($MysqlEnlace,"SELECT * FROM  `zz_usuarios` ORDER BY `lider` DESC");
			while($Fila = mysqli_fetch_array($secreto_mysql_consulta))
			{
			if(!$Fila['lider']) continue;
			echo 
			'
			<tr>
			<td>'.RemoverPiso($Fila['nombre']).'</td>
			<td>'.ObtenerFaccion($Fila['lider']).'</td>
			<td>'.$Fila['ultconn'].'</td>
			<td><a href="/administrar.php?stat=expulsion&unico='.$Fila['id'].'"><img src="/imagenes/peligro.png"></a></td>
			</tr>
			';
			}
			?>
			</tbody>
			</table>


			</div>
			</div><!-- /container -->
		</div>
	</div>
	</div>
	</div>
	<?php
		if(!empty($_GET['stat']))
		{
			$secreto_mysql_consulta = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` WHERE `id` = ".$_GET['unico'].";");
			$Fila = mysqli_fetch_array($secreto_mysql_consulta);
			switch($_GET['stat'])
			{
				case expulsion:
				{
					if($interno_secreto_nivel_admin < 2012)
					{
						echo"<script>alert('Usted no tiene nivel suficiente para esta acción.');</script>";
						redirect("http://pcu.zonazerorp.com/administrar.php");
						return 1;	
					}
					if(!$Fila["online"])
					{
						$secreto_mysql_consulta = mysqli_query($MysqlEnlace,"UPDATE `zz_usuarios` SET `lider`=0,`miembro`=0,`rango`=0 WHERE `id` = ".$_GET['unico'].";");
						echo "<script>alert('Usted Expulso al usuario ".RemoverPiso($_SESSION["name"])." de la faccion.');</script>";
					}
					else
					{
						echo"<script>alert('Este usuario esta conectado.');</script>";
					}
					redirect("http://pcu.zonazerorp.com/administrar.php");
				}
			}
		}//Fin de stat empty
	}
	?>
	</body>
</html>