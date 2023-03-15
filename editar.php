<?php
$servername = "localhost";
             $username = "root";
             $password = "";
             $database = "almacencfe";
             //Create connection
             $connection = new mysqli($servername, $username, $password, $database);



$ID = "";
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

if ( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
    //GET method: show the data of the articulos
    if ( !isset($_GET['ID']) ){
        header("location: /ALMACEN_CFE/AR.php");
        exit;
    }
    $ID = $_GET['ID'];

    //read the row of the selected articulo_alm from database table
    $sql = "SELECT * FROM articulo_alm WHERE ID=$ID";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();


$ARTICULO = $row["ARTICULO"];
    $ANAQUEL = $row["ANAQUEL"];
    $EXISTENCIA = $row["EXISTENCIA"];
    $NUEVOS = $row["NUEVOS"];
    $MARCA = $row["MARCA"];
    $COLOR = $row["COLOR"];
    $TAMANO = $row["TAMANO"];
    $TOTAL = $row["TOTAL"];
}
else{
//POST method: UPDATE the data of the articulo
$ID = $_POST["ID"];    
$ARTICULO = $_POST["ARTICULO"];
    $ANAQUEL = $_POST["ANAQUEL"];
    $EXISTENCIA = $_POST["EXISTENCIA"];
    $NUEVOS = $_POST["NUEVOS"];
    $MARCA = $_POST["MARCA"];
    $COLOR = $_POST["COLOR"];
    $TAMANO = $_POST["TAMANO"];
    $TOTAL = $_POST["TOTAL"];

    do {
    
        if ( empty($ID) || empty($ARTICULO) || empty($ANAQUEL) || empty($EXISTENCIA) || empty($NUEVOS) || empty($MARCA) || empty($COLOR) || empty($TAMANO) || empty($TOTAL) ) {
            $errorMessage = "DEBE COMPLEMENTAR TODOS LOS CAMPOS";
            break;
        }

         $sql = "UPDATE articulo_alm " .
              "SET ARTICULO = '$ARTICULO', ANAQUEL = '$ANAQUEL', EXISTENCIA = '$EXISTENCIA', NUEVOS = '$NUEVOS', MARCA = '$MARCA', COLOR = '$COLOR', TAMANO = '$TAMANO', TOTAL = '$TOTAL' " . "WHERE ID = $ID";

     $result = $connection->query($sql);
      if ( !$result){
        $errorMessage = "Invalid  query: " . $connection->error;
        break;
      }

      $successMessage = "Articulo modificado correctamente";

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
            <input type="hidden" name="ID" value="<?php echo $ID; ?>">
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