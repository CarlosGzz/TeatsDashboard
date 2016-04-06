<?php

	class conexion{

		private $conexion;
		private $server = "us-cdbr-iron-east-03.cleardb.net";
		private $username = "b6450cfb82ab99";
		private $password = "85853dd0";
		private $dbname = "heroku_a98a40c69d50d5a";
		private $user;
		private $pass;


		public function __construct(){
			// Create connection
			$this->conexion = new mysqli($this->server, $this->username, $this->password, $this->dbname );
			// Check connection
			if ($this->conexion->connect_error) {
				die("Connección fallida: Lo sentimos estamos teniendo problemas".$this->conexion->connect_error);
			}
		}

		public function cerrar(){
			
			$this->conexion->close();

		}

		public function login($user, $pass){
			
			$this->user = $user;
			$this->pass = $pass;

			$query = "SELECT usuario, contrasena, nombre, correo, idLugar
					  FROM administrador 
					  WHERE usuario= '".$this->user."' and contrasena='".$this->pass."'";

			$consulta = $this->conexion->query($query);
			if($row = mysqli_fetch_array($consulta)){
					session_start(); 

					$_SESSION['validacion'] = 1 ; 
					$_SESSION['usuario']= $row['usuario'];
					$_SESSION['nombre']= $row['nombre'];
					$_SESSION['correo']= $row['correo'];
					$_SESSION['idLugar']= $row['idLugar'];
					echo "index.php";


			} else {
				session_start();
				$_SESSION['validacion']=0;
				echo "1";
			}
		}
		public function logout(){
			session_destroy();
		}
	}
?>