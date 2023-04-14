<?php
include("../conexion.php");
$id=$_GET['cod'];
$consulta ="DELETE FROM cliente WHERE idcliente=$id";

$res=mysqli_query($con,$consulta);
if($res)
   echo"<script>
        alert('SE ELIMINO');
        location.href='ListaClienteInactivo.php';
   </script>";
else
    echo "No se Eliminod ";
    
?>

