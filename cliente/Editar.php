<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EDITAR DE CLIENTE</h1>
    <?php
    include("../conexion.php");
    $id = $_GET['cod'];
    $consulta = "select * from cliente where idCliente='$id'";
    $res = mysqli_query($con, $consulta);
    $reg = mysqli_fetch_array($res);
    ?>
    <form action='GrabarM.php' method='POST'> 
    <input type='hidden'name='id' value="<?= $reg['idCliente'] ?>">
    <label >RAZON SOCIAL</label>
    <input type="text" name="raz" value="<?= $reg['razonsocial'] ?>"><br><br>
    <label >NIT/CI</label>
    <input type="text" name="nit" value="<?= $reg['nit_ci'] ?>"><br><br>
    <label >ESTADO</label>
    <input  type="text"name="es" value="<?= $reg['estado'] ?>" ><br><br>
    <input type='submit'value='Registrar Cliente'> 
    
    </form>
</body>

</html>