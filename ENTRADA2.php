<?php
include("conexion2.php");
if (isset($_POST['ENTRADA'])) {
    if (($_POST['ID_ENTRADA']) >=1 && strlen($_POST['ID_ARTICULO']) >= 1 &&  strlen($_POST['ID_ANAQUEL']) >= 1 &&  strlen($_POST['PRECIO']) >= 1   &&  strlen($_POST['UNIDADES']) >=1 && strlen($_POST['CONDICION']) >= 1 &&  strlen($_POST['FECHA_ENTRADA']) >= 1 &&  strlen($_POST['ID_TRABAJADOR']) >= 1){
	
	$ID_ENTRADA= trim($_POST['ID_ENTRADA']);
	$ID_ARTICULO= trim($_POST['ID_ARTICULO']);
	$ID_ANAQUEL = trim($_POST['ID_ANAQUEL']);
	$PRECIO = trim($_POST['PRECIO']);
	$UNIDADES = trim($_POST['UNIDADES']);
	$CONDICION = trim($_POST['CONDICION']);
	$FECHA_ENTRADA = trim($_POST['FECHA_ENTRADA']);
    $ID_TRABAJADOR = trim($_POST['ID_TRABAJADOR']);

	$monseconsulta = "INSERT INTO entrada(ID_ENTRADA,ID_ARTICULO,ID_ANAQUEL,PRECIO,UNIDADES,CONDICION,FECHA_ENTRADA,ID_TRABAJADOR) VALUES ('$ID_ENTRADA','$ID_ARTICULO','$ID_ANAQUEL','$PRECIO','$UNIDADES','$CONDICION','$FECHA_ENTRADA','$ID_TRABAJADOR')"; 
	$monseresultado = mysqli_query($conexion2,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN ARTICULO A ENTRADA</h3>
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
