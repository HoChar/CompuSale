<?php 
	
	require_once "modelo/conexionFactura.class.php";
	$conexCliente = new ConexionProducto();
	$resultadoConexion = $conexCliente->abrir();
	if($resultadoConexion > 0){
		$clientes = $conexCliente->obtenerProductos();
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/plantillamostrarfactura.php";


 ?>