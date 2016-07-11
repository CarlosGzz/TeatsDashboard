<?php
	require "../../Modelo/connect2.php";
	
	$query = "SELECT * 
			  FROM CategoriaLugar";

	$data = $db->query($query);
	$categorias = array();
	while($object = mysqli_fetch_object($data)){
		$categorias[]=$object;
	}

	$categoriasString = '<div class="form-group">';
	$categoriasString .= '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoriaLugar">Categoria';
	$categoriasString .= '<span class="required">*</span>';
	$categoriasString .= '</label>';
	$categoriasString .= '<div class="col-md-9 col-sm-9 col-xs-12">';
	$categoriasString .= '<select class="form-control" form="lugarForm" id="categoriaLugar" name="categoriaLugar" required="required">';
	foreach ($categorias as $categoria) {
		$categoriasString .= '<option value="'.$categoria->IdCategoriaLugar.'">'.$categoria->nombre.'</option>';
	}
	$categoriasString .= '</select>';
	$categoriasString .= '</div>';
	$categoriasString .= '</div>';

	echo $categoriasString;

?>
