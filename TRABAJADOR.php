<!DOCTYPE html>
<html>
<head>
	<body background="GIF5.png">
 <title>REGISTRO EMPLEADOS</TITLE>
<link rel= "icon"  href="LOGO1.png">

<htlm lang="es">
	<HEAD>
		<TITLE>REGISTRO DE PERSONAL</TITLE>
		<link rel="stylesheet"href="   .css">
	</HEAD>
	<body background="FF.jpg">
			
			

				<right>
				<img src="  images.png" align="CENTER"  width="220" height="220">

			<center>

			<H1><FONT FACE="Bodoni MT Black" SEZE =20 COLOR=BLACK>EMPLEADOS </HEAD>
				<hr width="100%">
				<p><FONT FACE="Bodoni MT Black" SEZE =20 COLOR=PURPLE>ALMACEN</p>

 <meta charse="utf-8">
 <link rel="stylesheet" type="text/css" href="ESTILO.css">
 </head>
 <body>
 <form method="post">
 <h1><FONT FACE="Bodoni MT Black" SEZE =20 COLOR=WHITE>REGISTRO!</h1>
 <h1> <FONT FACE="Bodoni MT Black" SEZE =10 COLOR=WHITE>-PERSONAL-</h1>

 
  <input type="text" name="ID_TRABAJADOR" placeholder="ID_TRABAJADOR">
 <input type="text" name="NOMBRE" placeholder="NOMBRE">
 <input type="text" name="CARGO" placeholder="CARGO">
 <input type="text" name="TELEFONO" placeholder="TELEFONO">
  <input type="text" name="CURP" placeholder="CURP">
 <input type="text" name="RFC" placeholder="RFC">
 <input type="text" name="DIRECCION" placeholder="DIRECCION">
 
<input type="submit" name="EMPLEADO">
</form>

<?php
include("EMPLEADO2.php");
?>
</body>
</html>