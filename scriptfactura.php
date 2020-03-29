<?php 
	
	require_once "modelo/conexionfactura.class.php";
	$conexProducto = new ConexionProducto();
	$resultadoConexion = $conexProducto->abrir();
	if($resultadoConexion > 0){
		$productos = $conexProducto->obtenerProductos();
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/plantillamostrarfactura.php";


 ?>