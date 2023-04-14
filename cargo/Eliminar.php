<?php
include("../conexion.php");
$id=$_GET['cod'];
$consulta ="DELETE FROM cargo WHERE id_cargo=$id";

$res=mysqli_query($con,$consulta);
if($res)
   echo"<script>
        alert('SE ELIMINO');
        location.href='ListaCargo.php';
   </script>";
else
    echo "ta mal causa ";
    /*echo $query; exit;*/
?>

