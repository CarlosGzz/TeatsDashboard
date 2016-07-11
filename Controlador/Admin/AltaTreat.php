<?php
	include "../../Modelo/connect2.php";
	
	if(!empty($_POST)){
		$descripcionTreat = trim($_POST["descripcionTreat"]);
		$puntosTreat = trim($_POST["puntosTreat"]);
		$idLugar = trim($_POST["idLugar"]);
		$nivel = trim($_POST["nivel"]);

		$query = "INSERT INTO Treat(descripcionTreat, puntosTreat, IdLugar, nivel) 
                  VALUES ('$descripcionTreat', '$puntosTreat', '$idLugar', '$nivel')";
  
        if(!empty($_POST["descripcionTreat"]) && !empty($_POST["puntosTreat"]) && !empty($_POST["idLugar"]) && !empty($_POST["nivel"])) {
			if ($db->query($query) === TRUE) {
				echo "1";
			} else {
				echo "2";
			}
		}
	}

?>