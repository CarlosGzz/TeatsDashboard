<?php
	require "../../Modelo/connect2.php";
	
	$query = "SELECT * 
			  FROM Lugar";

	$data = $db->query($query);
	$lugares = array();
	while($object = mysqli_fetch_object($data)){
		$lugares[]=$object;
	}

	$lugarString = '<div class="form-group">';
	$lugarString .= '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="idLugar">Lugar';
	$lugarString .= '<span class="required">*</span>';
	$lugarString .= '</label>';
	$lugarString .= '<div class="col-md-9 col-sm-9 col-xs-12">';
	$lugarString .= '<select class="select2_single form-control select2-hidden-accessible" aria-hidden="true" tabindex="-1" form="treatForm" id="idLugar" name="idLugar" required="required">';
	$lugarString .= '<option></option>';
	foreach ($lugares as $lugar) {
		$lugarString .= '<option value="'.$lugar->IdLugar.'">'.$lugar->nombreLugar.'</option>';
	}
	$lugarString .= '</select>';
	$lugarString .= '</div>';
	$lugarString .= '</div>';

	echo $lugarString;

?>
