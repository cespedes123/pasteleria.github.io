<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LISTADO CLIENTE <a href="Registrar.php"><button>NUEVO</button> </a></h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>CARGO</th>
            <th>ACCIONES</th>
        </tr>
        <?php
        include("../conexion.php");
        $consulta = "SELECT * FROM `cargo`";
        $res = mysqli_query($con, $consulta);
        while ($reg = mysqli_fetch_array($res)) {
            echo "<tr class='border border-light'>";
            echo "<td class='border border-light'>" . $reg['id_cargo'] . "</td>";
            echo "<td class='border border-light'>" . $reg['cargo'] . "</td>";
            echo "<td> <a  href=Eliminar.php?cod=" . $reg['id_cargo'] . "><button >ELIMINAR</button> </a>";
            echo "<a href=Editar.php?cod=" . $reg['id_cargo'] . "><button>EDITAR</button> </a></td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>