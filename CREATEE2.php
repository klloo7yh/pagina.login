<?php
 $servername = "localhost";
			 $username = "root";
			 $password = "";
			 $database = "almacencfe";
			 $connection = new mysqli($servername, $username, $password, $database);


$ID_ENTRADA = "";
$ID_ARTICULO = "";
$ID_ANAQUEL = "";
$PRECIO = "";
$UNIDADES = "";
$CONDICION = "";
$ID_TRABAJADOR = "";



$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$ID_ENTRADA = $_POST["ID_ENTRADA"];
	$ID_ARTICULO = $_POST["ID_ARTICULO"];
	$ID_ANAQUEL = $_POST["ID_ANAQUEL"];
	$PRECIO = $_POST["PRECIO"];
	$UNIDADES = $_POST["UNIDADES"];
	$CONDICION = $_POST["CONDICION"];
	$ID_TRABAJADOR = $_POST["ID_TRABAJADOR"];
	

	do{

		if ( empty($ID_ENTRADA) || empty($ID_ARTICULO) || empty($ID_ANAQUEL) || empty($PRECIO) || empty($UNIDADES) || empty($CONDICION) || empty($ID_TRABAJADOR) ) {
			$errorMessage = "DEBE COMPLEMENTAR TODOS LOS CAMPOS";
			break;
   	}


  		//add new articulo to database
		$sql = "INSERT INTO entrada_art (ID_ENTRADA, ID_ARTICULO, ID_ANAQUEL, PRECIO, UNIDADES, CONDICION, ID_TRABAJADOR)" . "VALUES ('$ID_ENTRADA', '$ID_ARTICULO', '$ID_ANAQUEL', '$PRECIO', '$UNIDADES', '$CONDICION', '$ID_TRABAJADOR')";
		$result = $connection->query($sql);

		

			$ID_ENTRADA = "";
  			$ID_ARTICULO  = "";
			$ID_ANAQUEL = "";
			$PRECIO = "";
			$UNIDADES = "";
			$CONDICION = "";
			$ID_TRABAJADOR = "";
			

			$successMessage = "ARTICULO REGISTRADO CORRECTAMENTE A ENTRADA";

			header("location: /ALMACEN_CFE/CK.php");
			exit;
 	}while (false);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALMACEN</title>
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	</head>
<body>
	<div class="container my-5">
		<h2>Nuevo Articulo</h2>
    
    <?php
    if ( !empty($errorMessage) ){
    	echo "
     
		<div class='alert alert-warning alert-dismissible fade show' role='alert'>
		<strong>$errorMessage</strong>
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
		</div>
    	";
    }
    ?>


		<form method="post">
			<form class="row mb-3">
			<div class="col-sm-3 col-form-label">ID_ENTRADA</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ID_ENTRADA" value="<?php echo $ID_ENTRADA; ?>">
</div>
</div>
   		<form class="row mb-3">
			<div class="col-sm-3 col-form-label">ID_ARTICULO</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ID_ARTICULO" value="<?php echo $ID_ARTICULO; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">ID_ANAQUEL</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ID_ANAQUEL" value="<?php echo $ID_ANAQUEL; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">PRECIO</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="PRECIO" value="<?php echo $PRECIO; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">UNIDADES</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="UNIDADES" value="<?php echo $UNIDADES; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">CONDICION </label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="CONDICION" value="<?php echo $CONDICION; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">ID_TRABAJADOR </label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ID_TRABAJADOR" value="<?php echo $ID_TRABAJADOR; ?>">
</div>
</div>


<?php
if ( !empty($successMessage) ){
echo "
   <div class='row mb-3'>
   <div class='offset-sm-3 col-sm-6'>
   <div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>$successMessage</strong>
   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label'Close'></button>
</div>
</div>
</div>

";
}

?>



<div class="row mb-3">
	<div class="offset-sm-3 col-sm-3 d-grid">
		<button type="submit" class="btn btn-primary">ENVIAR</button>
	</div>
	<div class="col-sm-3 d-grid">
		<a class="btn btn-outline-primary" href="/ALMACEN_CFE/CK.php" role="button">CANCELAR</a>
	</div>
</div>


		</form>
	</div>
</body>
</html>