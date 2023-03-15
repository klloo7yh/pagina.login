<?php
include("conexion2.php");
if (isset($_POST['DEVOLUCION'])) {
    if (($_POST['ID_ARTICULO']) >=1 && strlen($_POST['UNIDAD']) >= 1 &&  strlen($_POST['CONDICION']) >= 1 &&  strlen($_POST['ID_ANAQUEL']) >= 1   &&  strlen($_POST['ID_TRABAJADOR']) >=1 && strlen($_POST['HORA']) >= 1 &&  strlen($_POST['FECHA']) >= 1){
	

	$ID_ARTICULO= trim($_POST['ID_ARTICULO']);
	$UNIDAD = trim($_POST['UNIDAD']);
	$CONDICION = trim($_POST['CONDICION']);
    $ID_ANAQUEL = trim($_POST['ID_ANAQUEL']);
    $ID_TRABAJADOR = trim($_POST['ID_TRABAJADOR']);

	$HORA = trim($_POST['HORA']);
	$FECHA = trim($_POST['FECHA']);
	

	$monseconsulta = "INSERT INTO devolucion(ID_ARTICULO,UNIDAD,CONDICION,ID_ANAQUEL,ID_TRABAJADOR,HORA,FECHA) VALUES ('$ID_ARTICULO','$UNIDAD','$CONDICION','$ID_ANAQUEL','$ID_TRABAJADOR','$HORA','$FECHA')"; 
	$monseresultado = mysqli_query($conexion2,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN ARTICULO EN DEVOLUCION</h3>
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