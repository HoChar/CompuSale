<?php 
	
	require_once "modelo/conexionProducto.class.php";
	$conexProducto = new ConexionProducto();
    $resultadoConexion = $conexProducto->abrir();
	if($resultadoConexion > 0){
        $productos = $conexProducto->obtenerProductos();
	}
	else{
		echo $resultadoConexion;
	}
	require_once "vista/plantillainicial.php";


 ?>