<?php
include("../conexion.php");
$id=$_GET['cod'];
$consulta ="DELETE FROM empleado WHERE id_empleado=$id";

$res=mysqli_query($con,$consulta);
if($res)
   echo"<script>
        alert('SE ELIMINO');
        location.href='ListaEmpleados.php';
   </script>";
else
    echo "ta mal causa ";
    /*echo $query; exit;*/
?>

