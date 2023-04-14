<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>MODIFICAR EMPLEADO</h1>

    <?php

    include("../conexion.php");
    $id = $_GET['cod'];
    ///////////// OBTENER EMPLEADOS///////////////
    $consulta = "select * from empleado where id_empleado='$id'";
    $res = mysqli_query($con, $consulta);
    $empleado = mysqli_fetch_array($res);
    ///////////// obtiene las categorias ///////////////
    $consultaC = "SELECT * FROM cargo";
    $resC = mysqli_query($con, $consultaC);
    ?>
    <form action="GrabarM.php" method="post">
        <input type="hidden" name="id" value="<?= $empleado['id_empleado'] ?>">
        <label for="">CARGO</label>
        <select name="car" id="car">
            <?php
            while ($cargo = mysqli_fetch_array($resC)) {
            ?>
                <option value="<?php echo $cargo['id_cargo'] ?>" <?php if ($cargo['id_cargo'] == $empleado['id_cargo']) {
                                                                    echo "selected";
                                                                } ?>>
                    <?php echo $cargo['cargo'] ?>
                </option>
            <?php
            }
            ?>
        </select><br><br>
        <label for="">CARNET IDENTIDAD</label>
        <input type="number" name="ci" id="ci" value="<?php echo $empleado['ci'] ?>"><br><br>
        <label for="">NOMBRE</label>
        <input type="text" name="nom" id="nom" value="<?php echo $empleado['nombre'] ?>"><br><br>
        <label for="">PATERNO</label>
        <input type="text" name="pat" id="pat" value="<?php echo $empleado['paterno'] ?>"><br><br>
        <label for="">MATERNO</label>
        <input type="text" name="mat" id="mat" value="<?php echo $empleado['materno'] ?>"><br><br>
        <label for="">DIRECCION</label>
        <input type="text" name="dir" id="dir" value="<?php echo $empleado['direccion'] ?>"><br><br>
        <label for="">TELEFONO</label>
        <input type="text" name="tel" id="tel" value="<?php echo $empleado['telefono'] ?>"><br><br>
        <label for="">FECHA NACIMIENTO</label>
        <input type="date" name="nac" id="nac" value="<?php echo $empleado['fechanacimiento'] ?>"><br><br>
        <label for="">GENERO</label><br>
        <input type="radio" name="gen" id="gen" value="F" <?php if ($empleado['genero'] == "F") {
                                                                echo "checked";
                                                            } ?>>
        FEMENIDO
        <input type="radio" name="gen" id="gen" value="M" <?php if ($empleado['genero'] == "M") {
                                                                echo "checked";
                                                            } ?>>
        MASCULINO
        <br>
        <label for="">INTERESES</label><br>
        <?php
        if ($empleado['intereses'] == "estudia ") {
            echo ' <input type="checkbox" name="int[]" id="int[]" value="estudia" checked>ESTUDIA
                  <input type="checkbox" name="int[]" id="int[]" value="trabaja">TRABAJA <br><br>';
        }
        if ($empleado['intereses'] == "trabaja ") {
            echo '<input type="checkbox" name="int[]" id="int[]" value="estudia" >ESTUDIA
                  <input type="checkbox" name="int[]" id="int[]" value="trabaja" checked>TRABAJA <br><br>';
        }
        if ($empleado['intereses'] == "estudia trabaja ") {
            echo '<input type="checkbox" name="int[]" id="int[]" value="estudia"checked>ESTUDIA
                  <input type="checkbox" name="int[]" id="int[]" value="trabaja" checked>TRABAJA <br><br>';
        }
        if ($empleado['intereses'] == "") {
            echo '<input type="checkbox" name="int[]" id="int[]" value="estudia">ESTUDIA
                    <input type="checkbox" name="int[]" id="int[]" value="trabaja">TRABAJA <br><br>';
        }
        ?>
        <input type="submit" value="EDITAR EMPLEADO" class="btn btn-outline-primary btn-block">
    </form>
</body>

</html>