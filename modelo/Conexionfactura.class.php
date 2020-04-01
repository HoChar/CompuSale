<?php

	class ConexionFactura{
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

		public function obtenerFacturas(){
			$consulta = $this->conexion->prepare("SELECT * FROM facturas");
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			return $consulta->fetchAll();
		}

        public function obtenerFActuraXidentificacion($identificacion){
			$consulta = $this->conexion->prepare("SELECT * FROM facturas where fac_id=?");
			$consulta->bindParam(1,$identificacion);
			$consulta->setFetchMode(PDO::FETCH_OBJ);
			$consulta->execute();
			$facturas= $consulta->fetchAll();
			return $facturas[0];
		}
    }