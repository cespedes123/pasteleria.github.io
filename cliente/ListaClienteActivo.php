<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LISTADO CLIENTE  <a  href="Registro.php"><button>AGREGAR NUEVO CLIENTE +</button> </a></h1>
    <table border="2">
        <tr>
            <th>ID</th>
            <th>RAZON SOCIAL</th>
            <th>NIT/CI</th>
            <th>ESTADO</th>
            <th>ACCIONES</th>
        </tr>
        <?php
        include("../conexion.php");
        $consulta = "select * from cliente where estado='ACTIVO'";
        $res = mysqli_query($con, $consulta);
        while ($reg = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $reg['idCliente'] . "</td>";
            echo "<td>" . $reg['razonsocial'] . "</td>";
            echo "<td>" . $reg['nit_ci'] . "</td>";
            echo "<td>" . $reg['estado'] . "</td>";
            echo "<td> <a  href=EliminarActivos.php?cod=" . $reg['idCliente'] . "><button >ELIMINAR</button> </a>";
            echo "<a href=Editar.php?cod=" . $reg['idCliente'] . "><button>EDITAR</button> </a></td>";
            echo "</tr>";
        }


        ?>
        
    </table>
</body>

</html>