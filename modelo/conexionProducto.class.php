<?php
	class ConexionProducto{
		private $conexion;
		public function abrir(){
			try {
				$this->conexion = new PDO('mysql:host=localhost;dbname=proy', 'root', '');
				$this->conexion->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return '1';
			} 
			catch (PDOException $e) {
				return $e->getMessage();				
			}
		}
		public function cerrar(){
			$this->conexion = null; 
		}

		public function insertarProducto(Producto $producto){
			$consulta = $this->conexion->prepare('INSERT INTO productos VALUES (?, ?, ?, ?)');
			$consulta->bindParam(1, $producto->pro_id);
			$consulta->bindParam(2, $producto->pro_nombre);
            $consulta->bindParam(3, $producto->pro_descripcion);
            $consulta->bindParam(4, $producto->pro_precio);
			$consulta->execute();
			return $consulta->rowCount();

		}

		public function obtenerProductos(){
			$consulta = $this->conexion->prepare("SELECT * FROM productos");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			return $consulta->fetchAll();
		}
    }
    
?>