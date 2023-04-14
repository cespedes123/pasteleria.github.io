<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MODIFICAR CARGO</h1>
    <?php
    include("../conexion.php");
    $id = $_GET['cod'];
    $consulta = "select * from cargo where id_cargo='$id'";
    $res = mysqli_query($con, $consulta);
    $reg = mysqli_fetch_array($res);
    ?>
    <form action='GrabarM.php' method='POST'>
        <input type='hidden' name='id' value="<?= $reg['id_cargo'] ?>">
        <label>CARGO</label>
        <input type="text" name="cargo" value="<?= $reg['cargo'] ?>"><br><br>
        <input type='submit' value='Registrar cargo'>
    </form>
</body>

</html>