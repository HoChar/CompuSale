<?php 
	require_once "modelo/conexionProducto.class.php";
	$conexProducto = new ConexionProducto();
	$resultadoConexion = $conexProducto->abrir();
	if($resultadoConexion > 0){
		$producto = $conexProducto->obtenerProductoId($_GET["pro_id"]);
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/producto.php"
 ?>