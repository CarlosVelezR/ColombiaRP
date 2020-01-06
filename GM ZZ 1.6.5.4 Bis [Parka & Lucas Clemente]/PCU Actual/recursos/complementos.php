<?php
//Variable & funciones para definir nombre de faccion y rangos.
function ObtenerFaccion($faccid){
	$faccname = "";
	switch($faccid){
		case 1: $faccname = "Departamento de Policia"; break;
		case 2: $faccname = "No Disponible"; break;
		case 3: $faccname = "Departamento Medico"; break;
		case 4: $faccname = "Car-Point Los Santos"; break;
		case 5: $faccname = "No Disponible"; break;
		case 6: $faccname = "Gobierno"; break;
		case 7: $faccname = "Cable News Network"; break;
		case 8: $faccname = "Hitman (No disponible)"; break;
		case 9: $faccname = "Federal Bureau of Investigation"; break;
		case 10: $faccname = "Corte Judicial (No disponible)"; break;
		case 11: $faccname = "Yakuza"; break;
		case 12: $faccname = "Latin Kings"; break;
		case 13: $faccname = "La Cosa Nostra"; break;
		case 14: $faccname = "Groove Street"; break;
		case 15: $faccname = "Cartel de Medellín"; break;
		
		default: $faccname = "Ninguna";
	}
	return $faccname;
}

function ObtenerRango($faccid,$rangoid){
	$rangid = "";
	switch($faccid){
		//LSPD Rangos 
		case 1:{
			switch($rangoid){
				case 2: $rangid = "Oficial"; break;
				case 3: $rangid = "Agente"; break;
				case 4: $rangid = "Sargento"; break;
				case 5: $rangid = "Capitán"; break;
				case 6: $rangid = "Comandante"; break;
				default: $rangid = "Cadete"; break;
			}
		}break;
		//LSMD Rangos
		case 3:{
			switch($rangoid){
				case 2: $rangid = "Paramédico"; break;
				case 3: $rangid = "Médico"; break;
				case 4: $rangid = "Supervisor"; break;
				case 5: $rangid = "Responsable Técnico"; break;
				case 6: $rangid = "Director"; break;
				default: $rangid = "Práctico"; break;
			}
		}break;
		//CPLS Rangos
		case 4:{
			switch($rangoid){
				case 2: $rangid = "Trucker"; break;
				case 3: $rangid = "Mecánico"; break;
				case 4: $rangid = "Ingeniero"; break;
				case 5: $rangid = "Supervisor"; break;
				case 6: $rangid = "Director"; break;
				default: $rangid = "Ayudante"; break;
			}
		}break;
		//Gobierno Rangos
		case 6:{
			switch($rangoid){
				case 2: $rangid = "Jefe de seguridad"; break;
				case 3: $rangid = "Ministro"; break;
				case 4: $rangid = "Alcalde LS"; break;
				case 5: $rangid = "Vice-Presidente"; break;
				case 6: $rangid = "Presidente"; break;
				default: $rangid = "Seguridad"; break;
			}
		}break;
		//CNN Rangos
		case 7:{
			switch($rangoid){
				case 2: $rangid = "Redactor"; break;
				case 3: $rangid = "Periodista"; break;
				case 4: $rangid = "Enviado Especial"; break;
				case 5: $rangid = "Presentador"; break;
				case 6: $rangid = "Diretor CNN"; break;
				default: $rangid = "Becario"; break;
			}
		}break;
		//FBI Rangos
		case 9:{
			switch($rangoid){
				case 2: $rangid = "S. Agente"; break;
				case 3: $rangid = "Especial"; break;
				case 4: $rangid = "Criminalista"; break;
				case 5: $rangid = "Sub-Director"; break;
				case 6: $rangid = "Director"; break;
				default: $rangid = "Agente"; break;
			}
		}break;
	
	}
	return $rangid;
}

function ObtenerPais($paisid){
	$paisstr = "";
	switch($paisid){ 
		case 1: $paisstr = "Japon"; break;
		case 2: $paisstr = "Italia"; break;
		case 3: $paisstr = "Rusia"; break;
		case 4: $paisstr = "Argentina"; break;
		case 5: $paisstr = "Bolivia"; break;
		case 6: $paisstr = "Brasil"; break;
		case 7: $paisstr = "Chile"; break;
		case 8: $paisstr = "España"; break;
		case 9: $paisstr = "Mexico"; break;
		case 10: $paisstr = "Ecuador"; break;
		case 11: $paisstr = "Uruguay"; break;
		case 12: $paisstr = "Venezuela"; break;
		default: $paisstr = "Inmigrante"; break;
	}
	return $paisstr;
}

function ObtenerCargo($cargoid){
	$cargotext = "";
	switch($cargoid){
		case 1: $cargotext = "Ayudante"; break;
		case 2: $cargotext = "Moderador"; break;
		case 3: $cargotext = "Admin Junior"; break;
		case 4: $cargotext = "Administrador"; break;
		case 5: $cargotext = "Admin Superior"; break;
		case 6: $cargotext = "Admin Líder"; break;
		case 2012: $cargotext = "Encargado de Facción"; break;
		case 2013: $cargotext = "Encargado del Staff"; break;
		case 2014: $cargotext = "Dueño"; break;
		default: $cargotext = "Ciudadano"; break;
	}
	return $cargotext;
}

function ObtenerSexo($sexid){
	$sexstr = "";
	switch($sexid){
		case 1: $sexstr = "Masculino"; break;
		default: $sexstr = "Femenino"; break;
	}
	return $sexstr;
}

function ObtenerLicencia($licid){
	$licname = "";
	switch($licid){
		case 1: $licname = "Si"; break;
		default: $licname = "No"; break;
	}
	return $licname;
}

function RemoverPiso($nombre){
	$nombre = str_replace("_"," ",$nombre);
	return $nombre;
}
?>