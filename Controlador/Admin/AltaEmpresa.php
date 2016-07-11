<?php
	include "../../Modelo/connect2.php";
	
	if(!empty($_POST)){
		$rfc = trim($_POST["rfc"]);
		$nombre = trim($_POST["nombreEmpresa"]);
		$query = "INSERT INTO Empresa (RFC,nombreEmpresa)
                  VALUES ('$rfc','$nombre')";
  
        if(!empty($_REQUEST["rfc"]) && !empty($_REQUEST["nombreEmpresa"]) ) {
			if ($db->query($query) === TRUE) {
				echo "1";
			} else {
				//echo "<script>alert('Error:  ". $query . "<br>" . $db->error."')</script>";
				echo "2";
			}
		}
	}

?>
