<html>
<head>
	<TITLE>PRESTAMO DE ART&Iacute;CULO</TITLE>
	<title>insertar registro</title>
			<link rel="stylesheet"href="  ESTILO3.css">
			<H1><FONT FACE="Bodoni MT Black" SEZE =20 COLOR=BLACK>PRESTAMOS </HEAD></FONT></H1>
</head>
<body>
	<form action="combo.php" method="post">
		<label for="TxtID_TRABAJADOR">ID_TRABAJADOR:</label><input type="text" name="TxtID_TRABAJADOR"/>
		<label for="TxtID_ARTICULO">ID_ARTICULO:</label><input type="text" name="TxtID_ARTICULO"/>
		<label for="TxtUNIDAD">UNIDAD:</label><input type="text" name="TxtUNIDAD"/>
		<label for="TxtHORA">HORA:</label><input type="text" name="TxtHORA"/>
		<label for="TxtFECHA">FECHA:</label><input type="text" name="TxtFECHA"/>
		<label for="CboZONA_DESTINADA">ZONA_DESTINADA:</label>
		<select name="CboZONA_DESTINADA">
			<option value ="JARDINERIA">JARDINERIA</option>
			<option value ="COMEDOR">COMEDOR </option>
			<option value ="MODULOS">MODULOS </option>
		</select>
		


		<p><label for="TxtID_RESPONSABLE">ID_RESPONSABLE:</label><input type="text" name="TxtID_TRABAJADOR"/>
		</p>
		<input type="submit" name="BotGuardar" value="Guardar"/>
		</form>
    </body>
    </html>
    <?php
      include('db.php');
$ZONA_DESTINADA=$_POST['ZONA_DESTINADA'];


$consulta="SELECT * FROM `prestamo` WHERE 1`ZONA_DESTINADA`";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
?>