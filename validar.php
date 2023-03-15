<?php
include('db.php');
$USUARIO=$_POST['USUARIO'];
$CONTRASEÑA=$_POST['CONTRASEÑA'];

$consulta="SELECT*FROM encargados where USUARIO='$USUARIO' and CONTRASEÑA='$CONTRASEÑA'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);