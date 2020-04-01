<?php 
	
	require_once "modelo/Conexionfactura.class.php";
	$conexFactura = new ConexionFactura();
	$resultadoConexion = $conexFactura->abrir();
	if($resultadoConexion > 0){
		$facturas = $conexFactura->obtenerFacturas();
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/plantillamostrarfactura.php";


 ?>