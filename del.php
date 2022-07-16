<!DOCTYPE html>
<html>

<head>
    <title>Sistema de negocio</title>
    <link rel="stylesheet" href="indez.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet">
</head>

<body>
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
    <br><br>
    <form action="eliminar.php" method="post">
        <ul>
            <h2>Eliminar productos por Nombre</h2>
            <li>
                <label for="name">Nombre del producto:</label>
                <input type="text" id="2" name="name" required value="">
            </li>
        </ul>
        <center><input type="submit" value="Eliminar" /></center><br><br>

    </form>

</body>


</html>