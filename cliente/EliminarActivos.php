
<?php
include("../conexion.php");
$id=$_GET['cod'];
$consulta="UPDATE cliente SET
estado= 'INACTIVO'
WHERE idCliente=$id
";
$res=mysqli_query($con,$consulta);
if($res)
   echo"<script>
        alert('SE ELIMINO');
        location.href='ListaClienteActivo.php';
   </script>";
else
    echo " No se Elimino";
    
?>