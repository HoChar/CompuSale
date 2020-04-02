<?php 
	require_once "Modelo/ConexionUsuario.class.php";
	require_once "Modelo/Usuario.class.php";
	$conexUsuario = new ConexionUsuario();
	$resultadoConexion = $conexUsuario->abrir();
	if($resultadoConexion==1){
		
		$usuario = new Usuario();
		$usuario->identificacion = $_POST["identificacion"];
		$usuario->nombre = $_POST["nombre"];
		$usuario->telefono = $_POST["telefono"];
		$usuario->f_nacimiento = $_POST["f_nacimiento"];
		$usuario->correo = $_POST["correo"];
		$usuario->ciudad = $_POST["ciudad"];
		$usuario->direccion = $_POST["direccion"];
		$filas = $conexUsuario->insertarUsuario($usuario);
		if($filas > 0){
			$iden=$_POST["identificacion"];
			$id=$_GET["id"];
			$precio=$_GET["precio"];
			$nombre=$_POST["nombre"];
		header("location:scriptfactura.php?id=$id&precio=$precio&nombre=$nombre&iden=$iden");
		}
		else{
		header("location: index.php?accion=2");
		}
	}
	else{
		echo $resultadoConexion;
	}
 ?>	