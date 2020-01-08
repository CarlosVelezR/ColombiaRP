<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pcu zonazerorp">
    <meta name="author" content="Quin0">
    <link rel="icon" href="../../favicon.ico">

    <title>PCU | ZonaZerorp.com</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">    
    <link rel="stylesheet" href="../../css/personalizado.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ZZ PCU</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
            <li><a href="http://www.zonazerorp.com/"><span class="glyphicon glyphicon-globe"></span> Web</a></li>
            <li><a href="http://foro.zonazerorp.com/"><span class="glyphicon glyphicon-book"></span> Foro</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- contenido -->

 <div class="container">

      <form action="comprobar.php" method="post" class="form-signin" role="form">
        <h2 class="form-signin-heading">Acceso    Usuarios</h2>
        <input type="text" name="pcu_user_name" class="form-control" placeholder="Usuario" required autofocus>
        <input type="password" name="pcu_user_clave" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox">
	<label><input name="remember" type="checkbox" value="Remember Me"> Recordar</label>
	</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> <!-- /container -->

    <div class="footer">
      <div class="container">
        <p class="text-muted">2015 PCU Versión 0.1 | Zonazerorp.com - Tu rol está aquí</p>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


