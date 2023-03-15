<?php
include("CONEXION.php");
if (isset($_POST['EMPLEADO'])) {
    if (($_POST['ID_TRABAJADOR']) >=1 && strlen($_POST['NOMBRE']) >= 1 &&  strlen($_POST['CARGO']) >= 1 &&  strlen($_POST['TELEFONO']) >= 1   &&  strlen($_POST['CURP']) >=1 && strlen($_POST['RFC']) >= 1 &&  strlen($_POST['DIRECCION']) >= 1){
	
	$ID_TRABAJADOR= trim($_POST['ID_TRABAJADOR']);
	$NOMBRE= trim($_POST['NOMBRE']);
	$CARGO = trim($_POST['CARGO']);
	$TELEFONO = trim($_POST['TELEFONO']);
	$CURP = trim($_POST['CURP']);
	$RFC = trim($_POST['RFC']);
	$DIRECCION = trim($_POST['DIRECCION']);


	$monseconsulta = "INSERT INTO trabajador(ID_TRABAJADOR,NOMBRE,CARGO,TELEFONO,CURP,RFC,DIRECCION) VALUES ('$ID_TRABAJADOR','$NOMBRE','$CARGO','$TELEFONO','$CURP','$RFC','$DIRECCION')"; 
	$monseresultado = mysqli_query($conexion4,$monseconsulta);
	if ($monseresultado) {
		?>
		<h3 class=".mtracorrecto"> * SE HA REGISTRADO UN EMPLEADO</h3>
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