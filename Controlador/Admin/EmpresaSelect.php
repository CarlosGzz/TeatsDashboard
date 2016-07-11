<?php
	require "../../Modelo/connect2.php";
	
	$query = "SELECT * 
			  FROM Empresa";

	$data = $db->query($query);
	$empresas = array();
	while($object = mysqli_fetch_object($data)){
		$empresas[]=$object;
	}

	$empresaString = '<div class="form-group">';
	$empresaString .= '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rfcEmpresa">Empresa';
	$empresaString .= '<span class="required">*</span>';
	$empresaString .= '</label>';
	$empresaString .= '<div class="col-md-9 col-sm-9 col-xs-12">';
	$empresaString .= '<select class="select1_single form-control select2-hidden-accessible" aria-hidden="true" tabindex="-1"  form="lugarForm" id="rfcEmpresa" name="rfcEmpresa" required="required">';
	foreach ($empresas as $empresa) {
		$empresaString .= '<option value="'.$empresa->RFC.'">'.$empresa->nombreEmpresa.'</option>';
	}
	$empresaString .= '</select>';
	$empresaString .= '</div>';
	$empresaString .= '</div>';

	echo $empresaString;

?>