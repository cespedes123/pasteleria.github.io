<?php
include("../conexion.php");
$cargo=$_POST['cargo'];
$query="INSERT cargo (cargo) values('$cargo')";
$res=mysqli_query($con,$query);
if($res)
   echo"<script>
        alert('SE CREsadO');
        location.href='ListaCargo.php';
   </script>";
else
    echo "ta mal causa ";
/*echo $query; exit;*/
?>