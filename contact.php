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
    <?php

    ?>
    <h2>Envia un correo a : productos@gmail.com</h2>
    <form action="mailto:123@gmail.com" method="post" enctype="text/plain">
        Nombre:<br>
        <input type="text" name="name"><br>
        E-mail:<br>
        <input type="text" name="mail"><br>
    </form>
    <br>
    <br>
    <textarea name="Comentarios" rows="5" cols="57">
    </textarea>
    <br>
    Comentario:<br>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
    <br>
    <br>
    <br>
</body>

</html>