
<?php
include("../conexion.php");
$id=$_POST['id'];
$cargo=$_POST['cargo'];
$query="UPDATE cargo SET
cargo='$cargo'
WHERE id_cargo=$id
";
$res=mysqli_query($con,$query);
if($res)
   echo"<script>
        alert('SE MODIFICO');
        location.href='ListaCargo.php';
   </script>";
else
    echo "ta mal causa ";
    echo $query; exit;3
?>