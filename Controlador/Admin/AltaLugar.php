<?php
	include "../../Modelo/connect2.php";
	
	if(!empty($_POST)){
		$nombreLugar = trim($_POST["nombreLugar"]);
		$direccion = trim($_POST["direccionLugar"]);
		$latitud = trim($_POST["latitud"]);
		$longitud = trim($_POST["longitud"]);
		$descripcionLugar = trim($_POST["descripcionLugar"]);
		$paginaWeb = trim($_POST["paginaWeb"]);
		$categoriaLugar = trim($_POST["categoriaLugar"]);
		$rfcEmpresa = trim($_POST["rfcEmpresa"]);

		$query = "INSERT INTO Lugar (nombreLugar, direccion, latitud, longitud, descripcionLugar, paginaWeb, IdCategoriaLugar, RFC)
                  VALUES ('$nombreLugar', '$direccion', '$latitud', '$longitud', '$descripcionLugar', '$paginaWeb', '$categoriaLugar', '$rfcEmpresa')";
  
        if(!empty($_POST["nombreLugar"]) && !empty($_POST["direccionLugar"]) && !empty($_POST["latitud"]) && !empty($_POST["longitud"]) && !empty($_POST["descripcionLugar"]) && !empty($_POST["paginaWeb"]) && !empty($_POST["categoriaLugar"]) && !empty($_POST["rfcEmpresa"]) ) {
			if ($db->query($query) === TRUE) {
				echo "1";
			} else {
				echo "2";
			}
		}
	}

?>