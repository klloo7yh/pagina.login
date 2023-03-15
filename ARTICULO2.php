<?php
include("CONEXION.php");
if (isset($_POST['ARTICULO'])) {
    if (($_POST['NOMBRE']) >= 1 &&  strlen($_POST['UNIDAD_MEDIDA']) >= 1 &&  strlen($_POST['DESCRIPCION']) >= 1   &&  strlen($_POST['MARCA']) >=1 && strlen($_POST['UNIDAD']) >= 1 &&  strlen($_POST['ID_CATEGORIA']) >= 1){
	
	$NOMBRE= trim($_POST['NOMBRE']);
	$UNIDAD_MEDIDA = trim($_POST['UNIDAD_MEDIDA']);
	$DESCRIPCION = trim($_POST['DESCRIPCION']);
	$MARCA = trim($_POST['MARCA']);
	$UNIDAD = trim($_POST['UNIDAD']);
	$ID_CATEGORIA = trim($_POST['ID_CATEGORIA']);


	$monseconsulta = "INSERT INTO articulos(NOMBRE,UNIDAD_MEDIDA,DESCRIPCION,MARCA,UNIDAD,ID_CATEGORIA) VALUES ('$NOMBRE','$UNIDAD_MEDIDA','$DESCRIPCION','$MARCA','$UNIDAD','$ID_CATEGORIA')"; 
	$monseresultado = mysqli_query($conexion4,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN ARTICULO</h3>
		<?php
	} else {	
		?>
		<h3 class=".mtraincorrecto"> * * INTENTE NUEVAMENTE * * </h3>
		<?php
	}

} else {
	?>
	<h3 class=".mtraincorrecto">* * IMPORTANTE- DEBE COMPLEMENTAR TODOS LOS DATOS * * </h3>

	<?php
   }
}


?>