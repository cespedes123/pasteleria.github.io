<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>REGISTRO DE CARGO</h1>
    <form action="Grabar.php" method="post">
        <label for="">CARGO</label>
        <select name="car" id="car">
            <?php
            include("../conexion.php");
            $cons = "select * from cargo";
            $reS = mysqli_query($con, $cons);
            while ($reg = mysqli_fetch_array($reS)){
            ?>
                <option value="<?php echo $reg['id_cargo']; ?>"><?php echo $reg['cargo'] ?></option>
            <?php
            }
            ?>
        </select><br><br>
        <label for="">CARNET IDENTIDAD</label>
        <input type="number" name="ci" id="ci" ><br><br>
        <label for="">NOMBRE</label>
        <input type="text" name="nom" id="nom" ><br><br>
        <label for="">PATERNO</label>
        <input type="text" name="pat" id="pat" ><br><br>
        <label for="">MATERNO</label>
        <input type="text" name="mat" id="mat" ><br><br>
        <label for="">DIRECCION</label>
        <input type="text" name="dir" id="dir" ><br><br>

        <label for="">TELEFONO</label>
        <input type="text" name="tel" id="tel" ><br><br>
        <label for="">FECHA NACIMIENTO</label>
        <input type="date" name="nac" id="nac" ><br><br>
        <label for="">GENERO</label><br>
                <input type="radio" name="gen" id="gen" value="F" >
                FEMENIDO
                <input type="radio" name="gen" id="gen" value="M" >
                MASCULINO

        <br>
        <label for="">INTERESES</label><br>
        <input type="checkbox" name="int[]" id="int[]" value="estudia">ESTUDIA
        <input type="checkbox" name="int[]" id="int[]" value="trabaja">TRABAJA <br><br>
        <input type="submit" value="REGISTRAR EMPLEADO" class="btn btn-outline-primary btn-block">
    </form>
</body>

</html>