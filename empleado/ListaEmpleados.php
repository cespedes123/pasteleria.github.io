<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LISTADO EMPLEADO <a  href="Registrar.php"><button>NUEVO</button> </a></h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>CARGO</th>
            <th>CI</th>
            <th>NOMBRE</th>
            <th>PATENO</th>
            <th>MATERNO</th>
            <th>DIRECCION</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>TELEFONO</th>
            <th>GENERO</th>
            <th>INTERESES</th>
            <th>ACCIONES</th>
        </tr>
        <?php
        /*$consulta = "SELECT p.id,p.producto,p.descripcion,p.pu,c.nombre
                             FROM productos p INNER JOIN categorias c ON p.categorias_id=c.id" */
        include("../conexion.php");
        $consulta = "select e.id_empleado,e.ci,e.nombre,e.paterno,e.materno,e.direccion,e.telefono,e.fechanacimiento,e.genero,e.intereses,
                            c.cargo
                    from empleado e INNER JOIN cargo c ON e.id_cargo=c.id_cargo ";
        $res = mysqli_query($con, $consulta);
        while ($reg = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $reg['id_empleado'] . "</td>";
            echo "<td>" . $reg['cargo'] . "</td>";
            echo "<td>" . $reg['ci'] . "</td>";
            echo "<td>" . $reg['nombre'] . "</td>";
            echo "<td>" . $reg['paterno'] . "</td>";
            echo "<td>" . $reg['materno'] . "</td>";
            echo "<td>" . $reg['direccion'] . "</td>";
            echo "<td>" . $reg['fechanacimiento'] . "</td>";
            echo "<td>" . $reg['telefono'] . "</td>";
            echo "<td>" . $reg['genero'] . "</td>";
            echo "<td>" . $reg['intereses'] . "</td>";
            echo "<td> <a  href=Eliminar.php?cod=" . $reg['id_empleado'] . "><button >ELIMINAR</button> </a>";
            echo "<a href=Editar.php?cod=" . $reg['id_empleado'] . "><button>EDITAR</button> </a></td>";
            echo "</tr>";
        }


        ?>
        
    </table>
</body>

</html>