
<?php
include("../conexion.php");
$id=$_POST['id'];
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
$i='';

foreach($in as $key =>$value){
    $i=$i.$in[$key].' ';

}

$query="UPDATE empleado 
        SET id_cargo=$ca,
        ci='$ci',
        nombre='$no',
        paterno='$pa',
        materno='$ma',
        direccion='$di',
        telefono='$te',
        fechanacimiento='$na',
        genero='$ge',
        intereses='$i'
        WHERE id_empleado=$id
        ";
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
