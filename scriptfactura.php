<?php 
	
	require_once "modelo/ConexionFactura.class.php";
	$conexFactura = new ConexionFactura();
	$resultadoConexion = $conexFactura->abrir();
	if($resultadoConexion > 0){
		$facturas = $conexFactura->obtenerFacturaXidentificacion($identificacion);
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/plantillamostrarfactura.php";


 ?>