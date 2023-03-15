<?php
$servername = "localhost";
             $username = "root";
             $password = "";
             $database = "almacencfe";
             //Create connection
             $connection = new mysqli($servername, $username, $password, $database);



$ID = "";
$NOMBRE = "";
$CARGO = "";
$TELEFONO = "";
$CURP = "";
$RFC = "";
$DIRECCION = "";


$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    //GET method: show the data of the empleados
    if ( !isset($_GET['ID']) ){
        header("location: /ALMACEN_CFE/EMPL.php");
        exit;
    }
    $ID = $_GET['ID'];

    //read the row of the selected articulo_alm from database table
    $sql = "SELECT * FROM empleado WHERE ID=$ID";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();


$NOMBRE = $row["NOMBRE"];
    $CARGO = $row["CARGO"];
    $TELEFONO = $row["TELEFONO"];
    $CURP = $row["CURP"];
    $RFC = $row["RFC"];
    $DIRECCION = $row["DIRECCION"];

}
else{
//POST method: UPDATE the data of the articulo
$ID = $_POST["ID"];    
$NOMBRE = $_POST["NOMBRE"];
    $CARGO = $_POST["CARGO"];
    $TELEFONO = $_POST["TELEFONO"];
    $CURP = $_POST["CURP"];
    $RFC = $_POST["RFC"];
    $DIRECCION = $_POST["DIRECCION"];
    

    do {
    
        if ( empty($ID) || empty($NOMBRE) || empty($CARGO) || empty($TELEFONO) || empty($CURP) || empty($RFC) || empty($DIRECCION) ) {
            $errorMessage = "DEBE COMPLEMENTAR TODOS LOS CAMPOS";
            break;
        }

         $sql = "UPDATE empleado " .
              "SET NOMBRE = '$NOMBRE', CARGO = '$CARGO', TELEFONO = '$TELEFONO', CURP = '$CURP', RFC = '$RFC', DIRECCION = '$DIRECCION' " . "WHERE ID = $ID";

     $result = $connection->query($sql);
      if ( !$result){
        $errorMessage = "Invalid  query: " . $connection->error;
        break;
      }

      $successMessage = "Empleado modificado correctamente";

      header("location: /ALMACEN_CFE/EMPL.php");
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
        <h2>Nuevo Empleado</h2>
    
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
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
            <form class="row mb-3">
            <div class="col-sm-3 col-form-label">NOMBRE COMPLETO</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="NOMBRE" value="<?php echo $NOMBRE; ?>">
</div>
</div>
        <form class="row mb-3">
            <div class="col-sm-3 col-form-label">CARGO O PUESTO</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="CARGO" value="<?php echo $CARGO; ?>">
</div>
</div>
<form class="row mb-3">
            <div class="col-sm-3 col-form-label">TELEFONO</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="TELEFONO" value="<?php echo $TELEFONO; ?>">
</div>
</div>
<form class="row mb-3">
            <div class="col-sm-3 col-form-label">CURP</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="CURP" value="<?php echo $CURP; ?>">
</div>
</div>
<form class="row mb-3">
            <div class="col-sm-3 col-form-label">RFC</label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="RFC" value="<?php echo $RFC; ?>">
</div>
</div>
<form class="row mb-3">
            <div class="col-sm-3 col-form-label">DIRECCION </label>
         <div class="col-sm-6">
            <input type="text" class="form-control" name="DIRECCION" value="<?php echo $DIRECCION; ?>">
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
        <a class="btn btn-outline-primary" href="/ALMACEN_CFE/EMPL.php" role="button">CANCELAR</a>
    </div>
</div>


        </form>
    </div>
</body>
</html>