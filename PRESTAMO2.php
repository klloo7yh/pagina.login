<?php
include("conexion2.php");
if (isset($_POST['PRESTAMO'])) {
    if (($_POST['ID_TRABAJADOR']) >=1 && strlen($_POST['ID_ARTICULO']) >= 1 &&  strlen($_POST['UNIDAD']) >= 1 &&  strlen($_POST['HORA']) >= 1   &&  strlen($_POST['FECHA']) >=1 && strlen($_POST['ZONA_DESTINADA']) >= 1 &&  strlen($_POST['ID_RESPONSABLE']) >= 1){
	
	$ID_TRABAJADOR= trim($_POST['ID_TRABAJADOR']);
	$ID_ARTICULO= trim($_POST['ID_ARTICULO']);
	$UNIDAD = trim($_POST['UNIDAD']);
	$HORA = trim($_POST['HORA']);
	$FECHA = trim($_POST['FECHA']);
	$ZONA_DESTINADA = trim($_POST['ZONA_DESTINADA']);
	$ID_RESPONSABLE = trim($_POST['ID_RESPONSABLE']);


	$monseconsulta = "INSERT INTO prestamo(ID_TRABAJADOR,ID_ARTICULO,UNIDAD,HORA,FECHA,ZONA_DESTINADA,ID_RESPONSABLE) VALUES ('$ID_TRABAJADOR','$ID_ARTICULO','$UNIDAD','$HORA','$FECHA','$ZONA_DESTINADA','$ID_RESPONSABLE')"; 
	$monseresultado = mysqli_query($conexion2,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN PRESTAMO</h3>
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