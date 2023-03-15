<?php
 $servername = "localhost";
			 $username = "root";
			 $password = "";
			 $database = "almacencfe";
			 $connection = new mysqli($servername, $username, $password, $database);


$ARTICULO = "";
$ANAQUEL = "";
$EXISTENCIA = "";
$NUEVOS = "";
$MARCA = "";
$COLOR = "";
$TAMANO = "";
$TOTAL = "";


$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	$ARTICULO = $_POST["ARTICULO"];
	$ANAQUEL = $_POST["ANAQUEL"];
	$EXISTENCIA = $_POST["EXISTENCIA"];
	$NUEVOS = $_POST["NUEVOS"];
	$MARCA = $_POST["MARCA"];
	$COLOR = $_POST["COLOR"];
	$TAMANO = $_POST["TAMANO"];
	$TOTAL = $_POST["TOTAL"];

	do{

		if ( empty($ARTICULO) || empty($ANAQUEL) || empty($EXISTENCIA) || empty($NUEVOS) || empty($MARCA) || empty($COLOR) || empty($TAMANO) || empty($TOTAL) ) {
			$errorMessage = "DEBE COMPLEMENTAR TODOS LOS CAMPOS";
			break;
   	}


  		//add new articulo to database
		$sql = "INSERT INTO articulo_alm (ARTICULO, ANAQUEL, EXISTENCIA, NUEVOS, MARCA, COLOR, TAMANO, TOTAL)" . "VALUES ('$ARTICULO', '$ANAQUEL', '$EXISTENCIA', '$NUEVOS', '$MARCA', '$COLOR', '$TAMANO', '$TOTAL')";
		$result = $connection->query($sql);

		

			$ARTICULO = "";
  			$ANAQUEL  = "";
			$EXISTENCIA = "";
			$NUEVOS = "";
			$MARCA = "";
			$COLOR = "";
			$TAMANO = "";
			$TOTAL = "";

			$successMessage = "ARTICULO REGISTRADO CORRECTAMENTE";

			header("location: /ALMACEN_CFE/AR.php");
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
			<div class="col-sm-3 col-form-label">ARTICULO</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ARTICULO" value="<?php echo $ARTICULO; ?>">
</div>
</div>
   		<form class="row mb-3">
			<div class="col-sm-3 col-form-label">ANAQUEL</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="ANAQUEL" value="<?php echo $ANAQUEL; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">EXISTENCIA</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="EXISTENCIA" value="<?php echo $EXISTENCIA; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">NUEVOS</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="NUEVOS" value="<?php echo $NUEVOS; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">MARCA</label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="MARCA" value="<?php echo $MARCA; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">COLOR </label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="COLOR" value="<?php echo $COLOR; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">TAMANO </label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="TAMANO" value="<?php echo $TAMANO; ?>">
</div>
</div>
<form class="row mb-3">
			<div class="col-sm-3 col-form-label">TOTAL </label>
         <div class="col-sm-6">
         	<input type="text" class="form-control" name="TOTAL" value="<?php echo $TOTAL; ?>">
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
		<a class="btn btn-outline-primary" href="/ALMACEN_CFE/AR.php" role="button">CANCELAR</a>
	</div>
</div>


		</form>
	</div>
</body>
</html>