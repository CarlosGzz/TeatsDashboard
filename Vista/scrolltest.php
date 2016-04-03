<?php
	require "..//Modelo/connect.php";
	$off = 0;
	$data = $db->query("SELECT * FROM AccionesDeUsuario ORDER BY fecha ASC  LIMIT 10 OFFSET $off ");
	$actividades = array();
	while($object = mysqli_fetch_object($data)){
		$actividades[]=$object;
	}
	foreach ($actividades as $actividad) {
		echo '<div class="panel panel-default">
 	 		  	<div class="panel-body">A Basic Panel</div>	
			  </div>';
	}
	echo "holo";
	echo "<a href='scrolltest.php'>next page</a>";
?>