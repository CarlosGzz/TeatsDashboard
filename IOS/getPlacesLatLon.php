<?php
	require "../Modelo/connect.php";
	
	if(isset($_POST)){
		if(!empty($_POST['latitud']) && !empty($_POST['longitud']) ){
			$latitud = trim($_POST['latitud'],"Optional()");
			$longitud = trim($_POST['longitud'],"Optional()");
		}else{
			$latitud = 25.655549;
			$longitud = -100.391763;
		}
	}else{
		$latitud = 25.655549;
		$longitud = -100.391763;
	}

	$resultset = $db->query("CALL `heroku_a98a40c69d50d5a`.`geoDist`(10, $latitud, $longitud);");
	//var_dump($resultset);
	$places= array();
			
	while($object = mysqli_fetch_object($resultset)){
		$places[] = $object;
		//var_dump($object);
	}
	
	echo json_encode($places);
	mysqli_close($db);

	
?>
