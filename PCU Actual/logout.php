<?php
    //session_start();
    include 'recursos/configuracion.php'; // incluímos los datos de acceso a la BD
    // comprobamos que se haya iniciado la sesion
    if(isset($_SESSION['NombreUsuario'])) {
        session_destroy();
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/login");
        exit;
    }else {
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri/login");
        exit;
    }
?>