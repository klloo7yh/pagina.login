<?php
include("conexion2.php");
if (isset($_POST['SALIDA'])) {
    if (($_POST['ID_SALIDA']) >=1 && strlen($_POST['ID_ARTICULO']) >= 1 &&  strlen($_POST['UNIDAD']) >= 1 &&  strlen($_POST['ID_TRABAJADOR_A']) >= 1   &&  strlen($_POST['ID_TRABAJADOR_LL']) >=1 && strlen($_POST['ZONA_DESTINADA']) >= 1 &&  strlen($_POST['CONDICION']) >= 1  &&  strlen($_POST['FECHA']) >= 1){
	
	$ID_SALIDA= trim($_POST['ID_SALIDA']);
	$ID_ARTICULO= trim($_POST['ID_ARTICULO']);
	$UNIDAD = trim($_POST['UNIDAD']);
	$ID_TRABAJADOR_A = trim($_POST['ID_TRABAJADOR_A']);
	$ID_TRABAJADOR_LL = trim($_POST['ID_TRABAJADOR_A']);
    $ZONA_DESTINADA = trim($_POST['ZONA_DESTINADA']);
	$CONDICION = trim($_POST['CONDICION']);
		$FECHA = trim($_POST['FECHA']);


	$monseconsulta = "INSERT INTO salidas(ID_SALIDA,ID_ARTICULO,UNIDAD,ID_TRABAJADOR_A,ID_TRABAJADOR_LL,ZONA_DESTINADA,CONDICION,FECHA) VALUES ('$ID_SALIDA','$ID_ARTICULO','$UNIDAD','$ID_TRABAJADOR_A','$ID_TRABAJADOR_LL','$ZONA_DESTINADA','$CONDICION','$FECHA')"; 
	$monseresultado = mysqli_query($conexion2,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN ARTICULO EN SALLIDA</h3>
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