<?php
    $servername = "localhost";
			 $username = "root";
			 $password = "";
			 $database = "almacencfe";

			 $connection = new mysqli($servername, $username, $password, $database);

	$ID = "";
	$NOMBRE = "";
	$UNIDAD_MEDIDA = "";
	$DESCRIPCION = "";
	$MARCA = "";
	$UNIDAD = "";
	$ID_CATEGORIA = "";

	$errorMessage = "";
	$successMessage = "";

	if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {

		if ( !isset($_GET["ID"]) ) {
			header("location: /ALMACEN_CFE/AR.php");
			exit;
		}
		$ID = $_GET["ID"];
        $sql = "SELECT * FROM articulos WHERE ID=$ID";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
        	header("location: /ALMACEN_CFE/AR.php");
        	exit;
        }
     else{
     	
    $ID = $_POST["ID"];
	$NOMBRE = $_POST["NOMBRE"];
	$UNIDAD_MEDIDA = $_POST["UNIDAD_MEDIDA"];
	$DESCRIPCION = $_POST["DESCRIPCION"];
	$MARCA = $_POST["MARCA"];
	$UNIDAD = $_POST["UNIDAD"];
	$ID_CATEGORIA = $_POST["ID_CATEGORIA"];
     }
     do{
    if ( empty($ID) || empty($NOMBRE) || empty($UNIDAD_MEDIDA) || empty($DESCRIPCION) || empty($MARCA) || empty($UNIDAD) || empty($ID_CATEGORIA) ){
    	$errorMessage = "All the fields are required";
    	break;
    }     
    $sql = "UPDATE articulos " .
    "SET name = '$ID', NOMBRE = '$NOMBRE', UNIDAD_MEDIDA = '$UNIDAD_MEDIDA', DESCRIPCION = '$DESCRIPCION', MARCA = '$MARCA', UNIDAD = '$UNIDAD', ID_CATEGORIA = 'ID_CATEGORIA' " .
    "WHERE ID = $ID";

    $result = $connection->query($sql);
     if (!$result) {
            	die("Invalid query: " . $connection->error);
            	break;
            }
            $successMessage = "ARTICULO UPDATE CORRECTLY";
            header("location: /ALMACEN_CFE/AR.php");
            exit;

     } while (true);


	}
	else{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ARTICULOS</title>
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
</head>
<body>
	<div class="container my-5">
		<h2>Lista de Articulos</h2>
<?php
if ( !empty($errorMessage) ){
	echo "
	<div class'alert alert-warning alert-dismissible fade show' role='alert'>
	<strong>$errorMessage</strong>
	<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
	";
}
?>
<form method="post">
<input type="hidden" name="ID" value="<?php echo $ID; ?>"> 
 <div class="row mb-3">
 <label class="col-sm-3 col-form-label">NOMBRE</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="NOMBRE" value="<?php echo $NOMBRE; ?>">
 </div>
 </div>
  <div class="row mb-3">
 <label class="col-sm-3 col-form-label">UNIDAD_MEDIDA</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="UNIDAD_MEDIDA" value="<?php echo $UNIDAD_MEDIDA; ?>">
 </div>
 </div>
  <div class="row mb-3">
 <label class="col-sm-3 col-form-label">DESCRIPCION</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="DESCRIPCION" value="<?php echo $DESCRIPCION; ?>">
 </div>
 </div>
  <div class="row mb-3">
 <label class="col-sm-3 col-form-label">MARCA</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="MARCA" value="<?php echo $MARCA; ?>">
 </div>
 </div>
  <div class="row mb-3">
 <label class="col-sm-3 col-form-label">UNIDAD</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="UNIDAD" value="<?php echo $UNIDAD; ?>">
 </div>
 </div>
  <div class="row mb-3">
 <label class="col-sm-3 col-form-label">ID_CATEGORIA</label>
 <div class="col-sm-6">
 <input type="text" class="form-control" name="ID_CATEGORIA" value="<?php echo $ID_CATEGORIA; ?>">
 </div>
 </div>

 <?php
 if ( !empty($successMessage) ) {
 	echo"
 	<div class='row mb-3'>
 	<div class='offset-sm-3 col-sm-6'>
 	<div class='alert alert-success alert-dismissible fade show' role='alert'>
 	<strong><$succesMessage</strong>
 	<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
 	</div>  
 	</div> 
 	";
 	}
    ?>
    <div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-grid">
    <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>
    <div class="col-sm-3 d-grid">
    <a class="btn btn-outline.primary" href="/ALMACEN/CFE/AR.php" role="button">CANCEL</a>
    </div>
    </form>
    </div>
</body>
</html>
		