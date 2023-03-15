<?php
if ( isset($_GET["ID"]) ) {
    $ID = $_GET["ID"];
     $servername = "localhost";
			 $username = "root";
			 $password = "";
			 $database = "almacencfe";

			 $connection = new mysqli($servername, $username, $password, $database);

			 $sql = "DELETE FROM empleado WHERE ID=$ID";
			 $connection->query($sql);
}
header("location: /ALMACEN_CFE/EMPL.php");
exit;
?>