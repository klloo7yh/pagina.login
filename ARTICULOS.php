<!DOCTYPE html>
 <html lang="es">
 <link rel="icon"href="">
 <head>
  <body background=".png">
  <meta charset="utf-8">
  <title> CECYTEM</title>
  <link rel="icon"href="cecy.jpg">
  <link rel="stylesheet" href=".css">
  <script src="BIENVENIDA.js"></script>
 </head>
 <img src="CECYTEM.jpg"align="RIGHT" width="200" height="200"><center><FONT FACE="Arial Black" SIZE=300 COLOR=BLACK><center> COLEGIO DE ESTUDIOS CIENT&Iacute;FICOS Y TECNOL&Oacute;GICOS DEL ESTADO DE M&Eacute;XICO. <img src="logo cfe.png" align="LEFT" width="200" right="200">  
       <hr width="100%">
     
  <input type="datetime-local" name="tiempolocal" id="tiempolocal">
<hr width="100%">
<marquee><FONT FACE="Ariel Black"SIZE=400 COLOR="white"> -ALMACEN CFE-</marquee> 

<button type="button"><a href="AR.php">REGISTRO DE ART&Iacute;CULOS</button><button type="button"><a href="ENTRADA.php">REGISTRO DE ART&Iacute;CULOS A ENTRADA</button><button type="button"><a href="EMPLEADO.php">REGISTRO DE EMPLEADO</button><button type="button"><a href="combo.php">REGISTRO DE PRESTAMOS DE ART&Iacute;CULOS</button><button type="button"><a href="DEVOLUCION.php">REGISTRO DE DEVOLUCI&Oacute;N DE ART&Iacute;CULOS</button><button type="button"><a href="SALIDA.php">REGISTRO DEART&Iacute;CULOS EN SALIDA</button>
</a></button></a>
<hr width="100%">

 <meta charse="utf-8">
 <link rel="stylesheet" type="text/css" href="ESTILO.css">
 </head>
 <body>
 <form method="post">
 <h1><FONT FACE="Bodoni MT Black" SEZE =20 COLOR=WHITE>REGISTRO!</h1>
 <h1> <FONT FACE="Bodoni MT Black" SEZE =10 COLOR=WHITE>-ARTICULO-</h1>

 
   <input type="text" name="NOMBRE" placeholder="NOMBRE">
 <input type="text" name="UNIDAD_MEDIDA" placeholder="UNIDAD_MEDIDA">
 <input type="text" name="DESCRIPCION" placeholder="DESCRIPCION">
  <input type="text" name="MARCA" placeholder="MARCA">
 <input type="text" name="UNIDAD" placeholder="UNIDAD">
 <input type="text" name="ID_CATEGORIA" placeholder="ID_CATEGORIA">
 
<input type="submit" name="ARTICULO">
</form>

<?php
include("ARTICULO2.php");
?>
</body>
</html>
</FONT>
</h1>
<center>
<P><a href="AR.php"><img src="regresar.png" aling="center" width="200" height="100"></P>
</a></P></center></FONT></h1></form></body></button></a></button>
      </header>
</body>