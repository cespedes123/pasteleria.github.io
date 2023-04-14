<?php
include("../conexion.php");
$ca=$_POST['car'];
$ci=$_POST['ci'];
$no=$_POST['nom'];
$pa=$_POST['pat'];
$ma=$_POST['mat'];
$di=$_POST['dir'];
$te=$_POST['tel']; 
$na=$_POST['nac'];
$ge=$_POST['gen'];
$in=$_POST['int'];
echo  "cargo".$ca." ";
$i='';
foreach($in as $key =>$value){
    $i=$i.$in[$key].' ';

}
$query="INSERT empleado (id_cargo,ci,nombre,paterno,materno,direccion,telefono,fechanacimiento,genero,intereses) 
        values($ca,'$ci','$no','$pa','$ma','$di','$te','$na','$ge','$i')";
$res=mysqli_query($con,$query);
if($res)
   echo"<script>
        alert('SE REGISTRO');
        location.href='ListaEmpleados.php';
   </script>";
else
    echo "ta mal causa ";
    /*echo $query; exit;*/
?>
