<select name="anaqueles" class="form-control">

<?php
include("CONEXION.php");
$getArticulo = "select * from anaqueles onder by ID";
$getArticulo1 = mysqli_query($getArticulo);
while($row = mysqli_fetch_array($getArticulo1))
{

  $ID = $row['ID'];
  $anaquel = $row['anaquel'];

  ?>
   <option value="<?php echo $ID; ?>"><?php echo $anaquel; ?></option>
  <?php

}
?>



</select>

