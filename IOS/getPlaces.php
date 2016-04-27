<?php
	require "../Modelo/connect2.php";

	$resultset = $db->query("SELECT nombre,descripcionTreat FROM Lugar LEFT JOIN Treat ON (Treat.idLugar=Lugar.idLugar) WHERE puntosNecesarios=0  LIMIT 10 ");
	//var_dump($resultset);
	$places= array();
			
	while($object = mysqli_fetch_object($resultset)){
		$places[] = $object;
		//var_dump($object);
	}
	
	echo json_encode($places);
	mysqli_close($db);
?>