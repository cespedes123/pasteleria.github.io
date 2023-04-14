<?php
include("../conexion.php");
$ra=$_POST['raz'];
$ni=$_POST['nit'];
$query="INSERT cliente (razonsocial,nit_ci, estado) values('$ra','$ni','ACTIVO')";
$res=mysqli_query($con,$query);
if($res)
    echo "Registrado";
else
    echo " No Registrado";
    
?>