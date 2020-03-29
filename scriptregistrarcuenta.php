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
        
        // despues de agregar los primeros, hacer consulta para agregar los segundos
    
		if($filas > 0){
		header("location: index.php?accion=1");
		}
		else{
		header("location: index.php?accion=2");
		}
	}
	else{
		echo $resultadoConexion;
	}
	
	
 ?>	