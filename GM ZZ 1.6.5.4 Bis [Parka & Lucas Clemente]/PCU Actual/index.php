<?php
//////////////////////////// PCU V 0.1 ZONAZERORP.COM
include 'recursos/configuracion.php';
include 'recursos/complementos.php';

$UsercpName = $_SESSION["NombreUsuario"];
$UsercpPass = $_SESSION["AccesoUsuario"];
$UsercpNivel = $_SESSION["Nivel"];
$UsercpRespect = $_SESSION["Respeto"];
$UsercpSkin = $_SESSION["Skin"];

if (isset($UsercpName)) {
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panel de control de usuarios de zonazero roleplay">
    <meta name="author" content="Quin0">
    <link rel="icon" href="../../favicon.ico">

    <title>PCU | <?=RemoverPiso($UsercpName);?></title>
   
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/pcu.css" rel="stylesheet">
    <link href="/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="/index.php">Zona Zero RP</a>
            </div>
            <!-- /.navbar-header -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
   <li><a href="http://www.zonazerorp.com/" target="_blank"><span class="glyphicon glyphicon-globe"></span> Web</a></li>
   <li><a href="http://foro.zonazerorp.com/" target="_blank"><span class="glyphicon glyphicon-book"></span> Foro</a></li>
      </ul>


            <ul class="nav navbar-top-links navbar-right">
     </li>  <a href="https://www.facebook.com/Zonazerorp" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a></li>
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
                            <a href="/index.php"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                        </li>
                       
                        <li>
                            <a href="/staff"><i class="fa fa-table fa-fw"></i> Staff</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
					<br>
					<br>
					<center>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- PCU ZonaZero (2) -->
					<ins class="adsbygoogle"
						 style="display:inline-block;width:200px;height:320px"
						 data-ad-client="ca-pub-8476451714923024"
						 data-ad-slot="6264226502"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
					</center>
            </div>
<a href="/logout" class="btn btn-outline btn-danger navbar-btn">
<span class="glyphicon glyphicon-off"></span> Desconectar
</a>
            <!-- /.navbar-static-side -->
        </nav>

<!-- Contenido -->
<div id="page-wrapper">
<div class="row">

<div class="col-lg-4">
<div class="alert alert-success">
<h3>Bienvenido <small><?=RemoverPiso($UsercpName);?></small> <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i></button></h3> 
</div>
</div>


<div class="col-lg-8">
<div class="alert alert-info">
<h3>PCU V 0.1 <small>Panel de control</small> <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button></h3>                          
</div>
</div>
	<center>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Prueba de Parka -->
		<ins class="adsbygoogle"
			 style="display:inline-block;width:720px;height:90px"
			 data-ad-client="ca-pub-8476451714923024"
			 data-ad-slot="9012543304"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</center>
</div>
           
<div class="row">
    <div class="col-lg-8">

<div class="panel panel-primary">
  <div class="panel-heading"><h3 class="panel-title">Opciones</h3> </div>
  <div class="panel-body">

<ul class="nav nav-tabs" role="tablist">
  
 <li><a href="/index.php?opcion=cuenta"><i class="fa fa-user"></i> Cuenta</a></li>
 <li><a href="/index.php?opcion=vehiculos"><i class="fa fa-car"></i> Vehículos</a></li>
 <li><a href="/index.php?opcion=casas"><i class="fa fa-home"></i> Casas</a></li>
 <li><a href="/index.php?opcion=negocios"><i class="fa fa-suitcase"></i> Negocios</a></li>
 <li><a href="/index.php?opcion=faccion"><i class="fa fa-users"></i> Facción</a></li>
 <li><a href="/index.php?opcion=clasificaciones"><i class="fa fa-bar-chart-o fa-fw"></i> Clasificaciones</a></li>
 
</ul>
</div>
<!--Aqui se incluyen todas las opciones y el codigo html restante-->

<?include 'recursos/opciones.php';?>

<!--Fin de las opciones-->
</div>
  </div>

<!-- /.col -->
<!-- Imagen PJ -->
<div class="col-lg-4">
<div class="panel panel-primary">

<div class="panel-heading">
Personaje <strong><?=RemoverPiso($UsercpName);?></strong>
</div>
                        
<div class="panel-body">
<div class="thumbnail">
<img id="miskin" src="/imagenes/skin_grandes/<?=$UsercpSkin;?>.png"  class="img-responsive" alt="skin">
</div>
</div>

<div class="panel-footer">
Nivel <span class="badge"> <?=$UsercpNivel;?></span>
Respeto <span class="label label-warning"> <?=$UsercpRespect;?></span> 
</div>

</div>
</div>

<div class="col-md-8">
			<footer>
<p>© 2015 Tu rol está aquí | <a href="http://www.zonazerorp.com" target="_blank">Zonazero Roleplay</a> | PCU V0.1</p>
			</footer>
		</div>

 </div><!-- /.row -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
    <script src="/js/jquery-1.11.0.js"></script>

    <script src="/js/bootstrap.min.js"></script>
  
    <script src="/js/plugins/metisMenu/metisMenu.min.js"></script>

    <script src="/js/pcu.js"></script>
</body>

</html>

<?

}else {
//Forzar redireccion al login si se intenta acceder a la PCU directamente.
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
header("Location: http://$host$uri/login");
exit;
}

?>