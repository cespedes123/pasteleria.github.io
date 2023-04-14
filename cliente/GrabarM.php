
<?php
include("../conexion.php");
$id=$_POST['id'];
$ra=$_POST['raz'];
$ni=$_POST['nit'];
$query="UPDATE cliente SET
razonsocial='$ra',
nit_ci='$ni'
WHERE idCliente=$id
";
$res=mysqli_query($con,$query);
if($res)
   echo"<script>
        alert('SE MODIFICO');
        location.href='listaActivos.php';
   </script>";
else
    echo "NO SE MODIFICO";
   
?>
