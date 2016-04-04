<?php
	$servername = "us-cdbr-iron-east-03.cleardb.net";
	$username = "b6450cfb82ab99";
	$password = "85853dd0";
	$dbname = "heroku_a98a40c69d50d5a";

	// Create connection
	$db = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($db->connect_error) {
		die("Connección fallida: Lo sentimos estamos teniendo problemas" . $db->connect_error);
	}

	var_dump($db);
	$user = "superadmin";
	$pass = "";

	$data = $db->query("SELECT usuario, contrasena, nombre, correo, imagen
					  FROM administrador 
					  WHERE usuario= '".$user."' and contrasena='".$pass."'");
	$events = array();
	while($object = mysqli_fetch_object($data)){
		$events[]=$object;
	}
	var_dump($events)
?>