<!DOCTYPE html>
<html>

<head>
    <title>Eliminar</title>
    <link rel="stylesheet" href="indez.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet">

</head>
<header class="encabezado">
    <h1>Sistema de administración de productos</h1>
</header>
<nav class="menu">
    <ul>
    <li> <a href="index.php"> Home </a> </li>
        <li> <a href="add.php"> Agregar productos </a> </li>
            <li> <a href="del.php"> Eliminar productos </a> </li>
            <li> <a href="edit.php"> Editar productos </a> </li>
            <li> <a href="contact.php">Contacto
                </a></li>


    </ul>
</nav>

<body>
    <center>
        <?php
        $conn = mysqli_connect("127.0.0.1", "root", "", "sistema");

        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name = $_REQUEST['name'];

        $sql = "DELETE FROM sistema WHERE name = '$name'";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>Producto eliminado de Mysql";

            echo nl2br("\nNombre $name");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>
    <form action="index.php" method="POST">
        <br><br><br>
        <center><input type="submit" value="Volver a tabla" /></center>
    </form>
</body>

</html>