<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="indez.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dosis:400,800" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>EDITAR PRODUCTOS</title>
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

<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "sistema");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
?>


<body>

    <form method="post" action="editing.php">
        <h2>EDITAR PRODUCTOS</h2>
        </div>

        <ul>
            <li>
                <label for="id">id del producto:</label>
                <input type="int" id="1" name="id" required value="">
            </li>
            <li>
                <label for="cant">Cantidad del producto:</label>
                <input type="int" id="2" name="cant" required value="">
            </li>
            <li>
                <label for="name">Nombre del producto:</label>
                <input type="text" id="3" name="name" required value="">
            </li>
            <li>
                <label for="price">Precio del producto:</label>
                <input type="int" id="4" name="price" required value="">
            </li>
            <li>
                <label for="categoria">Categoria del producto:</label>
                <input type="text" id="5" name="categoria" required value=""></input>
            </li>
        </ul>
        <center><input type="submit" value="Editar" /></center><br><br>
    </form>
    </div>
</body>

</html>