<?php
//Si no existe 'opcion' no pasa.
if(!empty($_GET['opcion'])){
	//de lo contrario pasa y selecciona una de los siguientes casos.
	switch($_GET['opcion']){
		case cuenta:{
			//Hacer la consulta de la base de datos.
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` WHERE `nombre` ='".$UsercpName."';");
				//Extraer todos los datos del jugador.
				$Fila = mysqli_fetch_array($MysqlResultado);
				echo '
                          <ul class="list-group">
                                <li class="list-group-item list-group-item-info"><i class="fa fa-user"></i> Nombre: '.RemoverPiso($Fila["nombre"]).'</li>
                                <li class="list-group-item"><i class="fa fa-info"></i> DNI: '.$Fila["dni"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-heart"></i> Edad: '.$Fila["edad"].' años</li>
                                <li class="list-group-item"><i class="fa fa-circle-thin"></i> Sexo: '.ObtenerSexo($Fila["sexo"]).'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-flag"></i> Origen: '.ObtenerPais($Fila["origen"]).'</li>

                                <li class="list-group-item"><i class="fa fa-mobile"></i> Numero Telefónico: '.$Fila["numerotelefonico"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-money"></i> Dinero en mano: <i class="fa fa-usd"></i> '.$Fila["dinero"].'</li>
                                <li class="list-group-item"><i class="fa fa-university"></i> Dinero en Banco: <i class="fa fa-usd"></i> '.$Fila["dinerobanco"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-credit-card"></i> Cheques: '.$Fila["cheques"].'</li>
                                <li class="list-group-item"><i class="fa fa-users"></i> Respeto: '.$Fila["respeto"].'</li>
                                
                                <li class="list-group-item list-group-item-info"><i class="fa fa-car"></i> Licencia Vehicular: '.ObtenerLicencia($Fila["licenciaauto"]).'</li>
                                <li class="list-group-item"><i class="fa fa-bomb"></i> Licencia Armas: '.ObtenerLicencia($Fila["licenciaarma"]).'</li>

          <li class="list-group-item list-group-item-success"><h3>Habilidades<small> del personaje</small>
          <button type="button" class="btn btn-success btn-circle"><i class="fa fa-wrench"></i></button></h3></li>


                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Transportador de Valores: '.$Fila["skill1"].'</li>
                                <li class="list-group-item"><i class="fa fa-suitcase"></i> Aviador: '.$Fila["skill2"].'</li>

                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Camionero: '.$Fila["skill3"].'</li>
                                <li class="list-group-item"><i class="fa fa-suitcase"></i> Barrendero: '.$Fila["skill4"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Chofer de Buses: '.$Fila["skill5"].'</li>
                                <li class="list-group-item"><i class="fa fa-suitcase"></i> Agricultor: '.$Fila["skill6"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Pizzero: '.$Fila["skill7"].'</li>

                                <li class="list-group-item"><i class="fa fa-suitcase"></i> Conductor de Trenes: '.$Fila["skill8"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Taxista: '.$Fila["skill9"].'</li>
                                <li class="list-group-item"><i class="fa fa-suitcase"></i> Basurero: '.$Fila["skill10"].'</li>
                                <li class="list-group-item list-group-item-info"><i class="fa fa-suitcase"></i> Pescador: '.$Fila["skill11"].'</li>
                            </ul>
             ';
		mysqli_close($MysqlEnlace);
		}break;
		case vehiculos:
		{
			//Hacer la consulta de la base de datos 1.
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT `auto`, `auto2`, `auto3`, `auto4` FROM `zz_usuarios` WHERE `nombre` ='".$UsercpName."';");
			//Extraer todos los datos del jugador.
			$Fila = mysqli_fetch_array($MysqlResultado);
			for($i=0;$i<4;$i++)
			{
				if(!$Fila[$i])continue;
				$MysqlResultadov = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_coches` WHERE `carid` = ".$Fila[$i].";");
				$vFila = mysqli_fetch_array($MysqlResultadov);
				echo 
				'
					<ul class="list-group">
					<li class="list-group-item list-group-item-info">Propietario: '.RemoverPiso($vFila['propietario']).'</li>
					<li class="list-group-item list-group-item-info">Nombre: '.$vFila['nombre'].'</li>
					<li class="list-group-item list-group-item-info">Placa: '.$vFila['placa'].'</li>
					<li class="list-group-item list-group-item-success">Precio de compra: '.$vFila['precio'].'$</li>
					<li class="list-group-item list-group-item-success">Precio de venta: '.($vFila['precio'] * 60 / 100).'$</li>
					<li class="list-group-item list-group-item-danger">Caduca: '.date('d/m/y - h:m',$vFila['tiempo']).'</li>
					<li class="list-group-item list-group-item-info"><center><img src="/imagenes/autos/Vehicle_'.$vFila['modelo'].'.jpg"></center></li>
					<li class="list-group-item"></li>
					</ul>
				';
			}
		}break;
		case faccion:{
			//Hacer la consulta de la base de datos.
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT `miembro`,`rango` FROM `zz_usuarios` WHERE `nombre` ='".$UsercpName."';");
			//Extraer todos los datos del jugador.
			$Fila = mysqli_fetch_array($MysqlResultado); 
			$ucp_user_facc_member = $Fila["miembro"];
			//Verificar que este en una faccion.
			if(!$ucp_user_facc_member){
		        echo 
				'
					<div class="alert alert-danger">
						<h4>Usted no pertenece a ninguna facción</h4>     
					</div>
				';
				mysqli_close($MysqlEnlace);
			}else{
				//Hacer la consulta de la base de datos.
				$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT `lider`,`miembro`,`rango` FROM `zz_usuarios` WHERE `nombre` ='".$UsercpName."';");
				//Extraer todos los datos del jugador.
				$Fila = mysqli_fetch_array($MysqlResultado);
				//Si esta en una faccion.
				echo '
					<div class="alert alert-info">Información Facción</div>
						<ul class="list-group">
							<li class="list-group-item"><span class="label label-primary">Facción</span> '.ObtenerFaccion($ucp_user_facc_member).'</li>
							<li class="list-group-item"><span class="label label-primary">Rango</span> '.ObtenerRango($ucp_user_facc_member,$Fila["rango"]).'</li>
						</ul>
				';
				
				if(!empty($_GET['llevar'])){
					switch($_GET['llevar']){
						case fadmin:{
							if($Fila["lider"]){
								$_SESSION["name"] = $_GET["name"];
								echo '
									<div class="alert alert-success">Opciones de Líder</div>
									<ul class="list-group">
										<li class="list-group-item"><a href="/index.php?opcion=faccion&stat=degrado" class="label label-warning">Degradar</a> Bajar de rango a '.RemoverPiso($_GET["name"]).'</li>
										<li class="list-group-item"><a href="/index.php?opcion=faccion&stat=ascenso" class="label label-success">Ascender</a> Subir de rango a '.RemoverPiso($_SESSION["name"]).'</li>
										<li class="list-group-item"><a href="/index.php?opcion=faccion&stat=expulsar" class="label label-danger">Expulsar</a> Expulsar de la faccion a '.RemoverPiso($_SESSION["name"]).'</li>
									</ul>
								';
							}else{
								//Si no es lider.
								redirect("http://pcu.zonazerorp.com/index.php?opcion=faccion");
							}
						}
					}
				}
				
				if(!empty($_GET['stat'])){
					$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` WHERE `nombre` ='".$_SESSION["name"]."';");
					$Filaget = mysqli_fetch_array($MysqlResultado);

					switch($_GET['stat']){
						case degrado:{
							if(!$Filaget["online"]){
								if($Filaget["rango"] > 1){
									$desgradouser = ($Filaget["rango"] - 1);
									mysqli_query($MysqlEnlace,"UPDATE `zz_usuarios` SET `rango`=".$desgradouser." WHERE `nombre` ='".$_SESSION["name"]."';");
									echo"<script>alert('Usted degrado al usuario ".RemoverPiso($_SESSION["name"]).".');</script>";
								}else{
									echo"<script>alert('Ya este usuario tiene el menor rango.');</script>";
								}
							}else{
								echo"<script>alert('Este usuario esta conectado.');</script>";
							}
							redirect("http://pcu.zonazerorp.com/index.php?opcion=faccion");
						}
						case ascenso:{
							if(!$Filaget["online"]){
								if(($Filaget["miembro"] != 1 || $Filaget["miembro"] != 2) ? ($Filaget["rango"] < 8) : ($Filaget["rango"] < 6)){
									$desgradouser = ($Filaget["rango"] + 1);
									mysqli_query($MysqlEnlace,"UPDATE `zz_usuarios` SET `rango`=".$desgradouser." WHERE `nombre` ='".$_SESSION["name"]."';");
									echo"<script>alert('Usted ascendio al usuario ".RemoverPiso($_SESSION["name"]).".');</script>";
								}else{
									echo"<script>alert('Ya este usuario tiene el mayor rango.');</script>";
								}
							}else{
								echo"<script>alert('Este usuario esta conectado.');</script>";
							}
							redirect("http://pcu.zonazerorp.com/index.php?opcion=faccion");
						}
						case expulsar:{
							if(!$Filaget["online"]){
								if($Fila["miembro"] == $Filaget["miembro"]){
									mysqli_query($MysqlEnlace,"UPDATE `zz_usuarios` SET `rango`=0,`miembro`=0,`lider`=0 WHERE `nombre` ='".$_SESSION["name"]."';");
									echo"<script>alert('Usted expulso al usuario ".RemoverPiso($_SESSION["name"])." de la faccion.');</script>";
								}else{
									redirect("http://pcu.zonazerorp.com/index.php?opcion=faccion");
								}
							}else{
								echo"<script>alert('Este usuario esta conectado.');</script>";
							}
							redirect("http://pcu.zonazerorp.com/index.php?opcion=faccion");
						}
					}
				}
				//Nueva consulta para mostrar miembros de la faccion.
				$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` ORDER BY `rango` DESC;");
				
				echo '
					<div class="alert alert-info">Miembros de la facción</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Estado</th>
										<th>Nombre</th>
										<th>Cargo</th>
										<th>Ultima Conexión</th>
										<th>Editar</th>
									</tr>
								</thead>
							<tbody>
				';
				while($MiembrosFila = mysqli_fetch_array($MysqlResultado)){
					if($ucp_user_facc_member == $MiembrosFila["miembro"]){
						$online = ($MiembrosFila["online"]) ? '<img src="/imagenes/PuntitoV.png">' : '<img src="/imagenes/PuntitoG.png">';
						echo ' 
						  <tr> 
						    <td>'.$online.'</td>	
								<td>'.RemoverPiso($MiembrosFila["nombre"]).'</td>
								<td>'.ObtenerRango($ucp_user_facc_member,$MiembrosFila["rango"]).'</td>
								<td>'.$MiembrosFila["ultconn"].'</td>
						';
						
						if($Fila["lider"] && !$MiembrosFila["lider"]){
							echo '<td><a href="/index.php?opcion=faccion&llevar=fadmin&name='.$MiembrosFila["nombre"].'"><img src="/imagenes/Lapicito.png"></a></td>';
						}else{
							echo '<td><img src="/imagenes/LapicitoX.png"></a></td>';
						}
						
						echo '</tr>';
					}
				}
			echo '</tbody></table></div>';
		}
		mysqli_close($MysqlEnlace);
		}break;
		case clasificaciones:{
			echo '
			<div class="alert alert-success">Cuentas Millonarias (Banco)</div>
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="info">
							<th>Estado</th>
							<th class="col-sm-6">Nombre</th>
							<th class="col-sm-3">Dinero</th>
						</tr>
					</thead><tbody>
			';
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` ORDER BY `dinerobanco` DESC LIMIT 5;");
			while($topstats = mysqli_fetch_array($MysqlResultado)){
				echo '
					<tr>
						<td><a><i class="fa fa-user"></i></a></td>
						<td>'.RemoverPiso($topstats["nombre"]).'</td>
						<td>'.'$'.$topstats["dinerobanco"].'</td>
					</tr>
				';
			}
			echo '
			</tbody></table>
				<div class="alert alert-success">Clasificación Niveles</div> 
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>Estado</th>
								<th class="col-sm-6">Nombre</th>
								<th class="col-sm-3">Nivel</th>
							</tr>
						</thead>
					<tbody>
			';
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` ORDER BY `nivel` DESC LIMIT 5;");
			while($topstats = mysqli_fetch_array($MysqlResultado)){
			echo '
				<tr>
					<td><a><i class="fa fa-user"></i></a></td>
					<td>'.RemoverPiso($topstats["nombre"]).'</td>
					<td>'.$topstats["nivel"].'</td>
				</tr>
			';
			}
			echo '
			</tbody></table>
				<div class="alert alert-success">Clasificación Horas Jugadas</div>  
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info">
								<th>Estado</th>
								<th class="col-sm-6">Nombre</th>
								<th class="col-sm-3">Horas</th>
							</tr>
						</thead>
					<tbody>
			';
			$MysqlResultado = mysqli_query($MysqlEnlace,"SELECT * FROM `zz_usuarios` ORDER BY `connectedtime` DESC LIMIT 5;");
			while($topstats = mysqli_fetch_array($MysqlResultado)){
			echo '
				<tr>
					<td><a><i class="fa fa-user"></i></a></td>
					<td>'.RemoverPiso($topstats["nombre"]).'</td>
					<td>'.$topstats["connectedtime"].'</td>
				</tr>
			';
			}
			echo '</tbody></table>';
		mysqli_close($MysqlEnlace);
		}break;

		case tienda:
		{
			
		}break;
	}
 }

else {echo '<div class="text-center"><img src="http://i.imgur.com/7asmYEa.jpg" class="img-responsive" alt="skin"></div>';}
?>