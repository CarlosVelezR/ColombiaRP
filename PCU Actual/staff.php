<?php
//////////////////////////// PCU V 0.1 ZONAZERORP.COM
include 'recursos/configuracion.php';
include 'recursos/complementos.php';

$UsercpName = $_SESSION["NombreUsuario"];
$UsercpPass = $_SESSION["AccesoUsuario"];
$UsercpAdminNivel = $_SESSION["normalAdmin"];

$_SESSION['secretoNivelAdmin'] = 0;
$_SESSION['secretoNombreAdmin'] = "";
					
if (isset($UsercpName)) {
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="staff zonazero roleplay">
    <meta name="author" content="zonazero roleplay">
    <link rel="icon" href="../../favicon.ico">

    <title>PCU | Staff</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/pcu.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Zona Zero RP</a>
            </div>
            <!-- /.navbar-header -->

    <!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">

	<li><a href="http://www.zonazerorp.com/" target="_blank"><span class="glyphicon glyphicon-globe"></span> Web</a></li>
	<li><a href="http://foro.zonazerorp.com/" target="_blank"><span class="glyphicon glyphicon-book"></span> Foro</a></li>
	</ul>

    <ul class="nav navbar-top-links navbar-right">

     </li><a href="https://www.facebook.com/Zonazerorp" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a></li>
     </li>  <a href="https://twitter.com/ZonaZeroRP" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a></li>
     </li>  <a href="http://www.youtube.com/user/Zonazerorp" target="_blank" class="btn btn-social-icon btn-youtube"><i class="fa fa-youtube"></i></a></li>
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="/index.php?opcion=cuenta"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                        </li>
                        <li>
                            <a href="/staff"><i class="fa fa-table fa-fw"></i> Staff</a>
                        </li>
                        <?php
						if($UsercpAdminNivel)
						{
							echo'<li><a href="/administrar.php"><i class="fa fa-table fa-fw"></i> Administrar</a></li>';
						}
						?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
<a href="/logout" class="btn btn-outline btn-danger navbar-btn">
<span class="glyphicon glyphicon-off"></span> Desconectar</a>
        <!-- /.navbar-static-side -->
        </nav>
        <!-- Contenido -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				 <div class="alert alert-info">
                    <h3><button type="button" class="btn btn-info btn-circle"><i class="fa fa-user"></i></button> Miembros del staff</h3>
                  </div>
		         </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<div class="row">

<div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Administradores de zonazerorp
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cargo</th>
                                            <th>Ultima Conexión</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?
										//Hacer la consulta de la base de datos.
										$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` ORDER BY `niveladmin` DESC");
										while($FilaStaff = mysqli_fetch_array($MysqlResultado)){
											if($FilaStaff["niveladmin"] >= 1 && $FilaStaff["niveladmin"] <= 3){
												echo '
													<tr class="success">
														<td>'.RemoverPiso($FilaStaff["nombre"]).'</td>
														<td>'.ObtenerCargo($FilaStaff["niveladmin"]).'</td>
														<td>'.$FilaStaff["ultconn"].'</td>
														';
												
												if($FilaStaff["online"]){
													echo '<td><img src="/imagenes/PuntitoV.png"></td>';
														}else{
													echo '<td><img src="/imagenes/PuntitoG.png"></td>';
												}
												
												echo '</tr>';
											}else if($FilaStaff["niveladmin"] >= 4 && $FilaStaff["niveladmin"] <= 6){
												echo '
													<tr class="info">
														<td>'.RemoverPiso($FilaStaff["nombre"]).'</td>
														<td>'.ObtenerCargo($FilaStaff["niveladmin"]).'</td>
														<td>'.$FilaStaff["ultconn"].'</td>
														';
												
												if($FilaStaff["online"]){
													echo '<td><img src="/imagenes/PuntitoV.png"></td>';
														}else{
													echo '<td><img src="/imagenes/PuntitoG.png"></td>';
												}
												
												echo '</tr>';
											}else if($FilaStaff["niveladmin"] == 2012 || $FilaStaff["niveladmin"] == 2013){
												echo '
													<tr class="warning">
														<td>'.RemoverPiso($FilaStaff["nombre"]).'</td>
														<td>'.ObtenerCargo($FilaStaff["niveladmin"]).'</td>
														<td>'.$FilaStaff["ultconn"].'</td>
														';
												
												if($FilaStaff["online"]){
													echo '<td><img src="/imagenes/PuntitoV.png"></td>';
														}else{
													echo '<td><img src="/imagenes/PuntitoG.png"></td>';
												}
												
												echo '</tr>';
											}else if($FilaStaff["niveladmin"] == 2014){
												echo '
													<tr class="danger">
														<td>'.RemoverPiso($FilaStaff["nombre"]).'</td>
														<td>'.ObtenerCargo($FilaStaff["niveladmin"]).'</td>
														<td>'.$FilaStaff["ultconn"].'</td>
														';
												
												if($FilaStaff["online"]){
													echo '<td><img src="/imagenes/PuntitoV.png"></td>';
														}else{
													echo '<td><img src="/imagenes/PuntitoG.png"></td>';
												}
												
												echo '</tr>';
											}
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
 <!-- /.col-lg-12 -->
             </div>
<!-- /.row -->
      </div>
     <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/pcu.js"></script>
</body>

</html>
<?
}else {
//Forzar redireccion al login si se intenta acceder a la PCU directamente.
header("Location: /login");
}
?>