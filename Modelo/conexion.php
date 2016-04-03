<?php

	class conexion{

		private $conexion;
		private $server = "localhost";
		private $username = "treats";
		private $password = "treats1";
		private $dbname = "Treats";
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

			$query = "SELECT usuario, contrasena, nombre, correo, imagen
					  FROM Administrador 
					  WHERE usuario= '".$this->user."' and contrasena='".$this->pass."'";

			$consulta = $this->conexion->query($query);
			if($row = mysqli_fetch_array($consulta)){
					session_start(); 

					$_SESSION['validacion'] = 1 ; 
					$_SESSION['usuario']= $row['usuario'];
					$_SESSION['nombre']= $row['nombre'];
					$_SESSION['correo']= $row['correo'];
					$_SESSION['imagen']= $row['imagen'];
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