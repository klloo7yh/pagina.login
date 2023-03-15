<html>
<head>
  <title>CONSULTA</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">



    <center><h1>REGISTRO ARTICULO NUEVO</h1></center>

    <form method="POST" action="registro.php" >

    <div class="form-group">
      <label for="NOMBRE">NOMBRE</label>
      <input type="text" name="NOMBRE" class="form-control" id="NOMBRE">
  </div>

  <div class="form-group">
      <label for="UNIDAD_MEDIDA">UNIDAD_MEDIDA </label>
      <input type="text" name="UNIDAD_MEDIDA" class="form-control" id="UNIDAD_MEDIDA" >
  </div>

   <div class="form-group">
      <label for="DESCRIPCION">DESCRIPCION</label>
      <input type="text" name="DESCRIPCION" class="form-control" id="DESCRIPCION">
  </div>

  <div class="form-group">
      <label for="MARCA">MARCA </label>
      <input type="text" name="MARCA" class="form-control" id="MARCA">
  </div>
    <div class="form-group">
      <label for="UNIDAD">UNIDAD </label>
      <input type="text" name="UNIDAD" class="form-control" id="UNIDAD">
  </div>
  <div class="form-group">
      <label for="ID_CATEGORIA">ID_CATEGORIA </label>
      <input type="text" name="ID_CATEGORIA" class="form-control" id="ID_CATEGORIA">
  </div>
    <center>
      <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    </center>

  </form>



  <?php

    if(isset($_POST['btn1']))
    {
      include("conexion2.php");

      $NOMBRE = $_POST['NOMBRE'];
      $UNIDAD_MEDIDA = $_POST['UNIDAD_MEDIDA'];
      $DESCRIPCION = $_POST['DESCRIPCION'];
      $MARCA = $_POST['MARCA'];
      $UNIDAD = $_POST['UNIDAD'];
      $ID_CATEGORIA = $_POST['ID_CATEGORIA'];

      mysqli_query($conexion2, "INSERT INTO articulos (NOMBRE,UNIDAD_MEDIDA,DESCRIPCION,MARCA,UNIDAD,ID_CATEGORIA) values ('$NOMBRE','$UNIDAD_MEDIDA','$DESCRIPCION','$MARCA','$UNIDAD','$ID_CATEGORIA')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
           echo "Se Registro Correctamente el Articulo";
    }

    if(isset($_POST['btn2']))
    {
      include("conexion2.php");

        $NOMBRE = $_POST['NOMBRE'];
        if($NOMBRE=="NOMBRE") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "ESCRIBE UN NOMBRE";}
        else
        {  
          $resultado = mysqli_query($conexion2,"SELECT * FROM articulos WHERE NOMBRE = $NOMBRE");
          while($consulta = mysqli_fetch_array($resultado))
          {
            echo $consulta['NOMBRE'];
            "
              <table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>NOMBRE</center></b></td>
                  <td><b><center>UNIDAD_MEDIDA</center></b></td>
                  <td><b><center>DESCRIPCION</center></b></td>
                  <td><b><center>MARCA</center></b></td>
                   <td><b><center>UNIDAD</center></b></td>
                    <td><b><center>ID_CATEGORIA</center></b></td>
                                     </tr>
                <tr>
                  <td>".$consulta['NOMBRE']."</td>
                  <td>".$consulta['UNIDAD_MEDIDA']."</td>
                  <td>".$consulta['DESCRIPCION']."</td>
                  <td>".$consulta['MARCA']."</td>
                  <td>".$consulta['UNIDAD']."</td>
                  <td>".$consulta['ID_CATEGORIA']."</td>
                                 </tr>
              </table>
            ";
          }
        }

    
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>