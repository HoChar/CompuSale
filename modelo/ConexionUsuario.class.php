<?php 
	class ConexionUsuario{
		private $conexion;
		public function abrir(){
			try {
			 	$this->conexion = new PDO("mysql:host=localhost;dbname=proy","root","");
			 	$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			 	return "1";
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}
		public function cerrar(){
			$this->conexion = null;
			}
		public function insertarUsuario(Usuario $usuario){
			$consulta = $this->conexion->prepare("INSERT INTO usuarios VALUES(?, ?, ?, ?, ?, ?, ? )");
			$consulta->bindParam(1, $usuario->identificacion);
            $consulta->bindParam(2, $usuario->nombre);
            $consulta->bindParam(3, $usuario->telefono);
            $consulta->bindParam(4, $usuario->fechaNacimiento);
			$consulta->bindParam(5, $usuario->correo);
			$consulta->bindParam(6, $usuario->ciudad);
			$consulta->bindParam(7, $usuario->direccion);
			$consulta->execute();
			return $consulta->rowCount();
		}
		public function obtenerUsuarios(){
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			return $consulta->fetchAll();
		}
		public function obtenerUsuarioIdentificacion($identificacion){
			$consulta = $this->conexion->prepare("SELECT * FROM usuarios WHERE usu_id=?");
			$consulta->bindParam(1,$identificacion);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$usuarios = $consulta->fetchAll();
			return $usuarios[0];
        }
        /*
		public function actualizarServicio($servicio){ //este no sirve, revisar
			$consulta = $this->conexion->prepare("UPDATE servicios set ser_nombre=?, ser_costo=? WHERE ser_codigo=?");
			$consulta->bindParam(1, $servicio->nombre);
			$consulta->bindParam(2, $servicio->costo);
			$consulta->bindParam(3, $servicio->codigo);
			$consulta->execute();
			return $consulta->rowCount();
		}
		public function borrarServicio($codigo){
			$consulta = $this->conexion->prepare("DELETE FROM servicios WHERE ser_codigo=?");
			$consulta->bindParam(1, $codigo);
			$consulta->execute();
			return $consulta->rowCount();
		}*/
		
	}