<?php

	class ConexionProducto{
		private $conexion;
		
		public function abrir(){
			try {
				$this->conexion = new PDO('mysql:host=localhost;dbname=proy', 'root', '');
				$this->conexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return '1';
			} 

			catch (PDOException $e)  {
				return $e->getMessage();				
			}
		}

		public function cerrar(){
			$this-> $conexion = null; 
		}

        public function obtenerProductos(){
			$consulta = $this->conexion->prepare("SELECT pro_nombre,pro_precio FROM usuarios");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			return $consulta->fetchAll();
		}
    }