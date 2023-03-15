<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ARTICULOS</title>
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container my-5">
		<h2>Lista de Articulos</h2>
		<a class="btn btn-primary" href="/ALMACEN_CFE/registro.php" role="button">Nuevo Articulo</a>
		<br>
		<table class="table">
			<thead>
			<tr>
				<th>ID</th>
				<th>ARTICULO</th>
				<th>ANAQUEL</th>
				<th>EXISTENCIA</th>
				<th>NUEVOS</th>
				<th>MARCA</th>
				<th>COLOR</th>
				<th>TAMANO</th>
				<th>TOTAL</th>
				<th>FECHA DE REGISTRO</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			 $servername = "localhost";
			 $username = "root";
			 $password = "";
			 $database = "almacencfe";

			 $connection = new mysqli($servername, $username, $password, $database);
			 if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
            }
			
			$sql = "SELECT * FROM articulo_alm";
			$result = $connection->query($sql);
            if (!$result) {
            	die("Invalid query: " . $connection->error);
            }

           
			while($row = $result->fetch_assoc()) {
            	echo"
                <tr>
				<td>$row[ID]</td>
				<td>$row[ARTICULO]</td>
				<td>$row[ANAQUEL]</td>
				<td>$row[EXISTENCIA]</td>
				<td>$row[NUEVOS]</td>
				<td>$row[MARCA]</td>
				<td>$row[COLOR]</td>
				<td>$row[TAMANO]</td>
				<td>$row[TOTAL]</td>
				<td>$row[FECHA]</td>
				<td>
					
                <a class='btn btn-primary btn-sm' href='/ALMACEN_CFE/editar.php?ID=$row[ID]'>EDITAR</a>
		<a class='btn btn-primary btn-sm' href='/ALMACEN_CFE/eliminar.php?ID=$row[ID]'>ELIMINAR</a>
				";
			}

			?>

	
</td>
</tr>
</tbody>
</table>
</div>
</body>
<P style="text-align: center"><a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=almacencfe&table=articulos&pos=0"onclick="window.open(this.href, '', 'resizable=no,status=no,location=no,toolbar=no,menubar=yes,fullscreen=no,acrollbars=no,dependent=no,width=700,left=10,height=700,top=10');  return false;"><span style="font-size: 22px";><span style="font-family: Trebuchet MS,Helvetica,sans-serif">Tabla de registro en la base de datos (:</span></span></a></P>
<center>
<P><a href="home.php"><img src="regresar.png" aling="center" width="200" height="100"></P>
