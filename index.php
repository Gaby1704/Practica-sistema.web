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
    $link = new PDO('mysql:host=localhost;dbname=sistema', 'root', '');

    ?>
    <br><br><br><br>
    <table class="table table-striped table-bordered table-hover">

        <thead class="thead-default">
            <tr>
                <th>ID</th>
                <th>CANTIDAD</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>CATEGORIA</th>

            </tr>
        </thead>
        <?php
        foreach ($link->query('SELECT * from sistema') as $row) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['cantidad'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['categoria'] ?></td>
            </tr>
        <?php
        }
        ?>

</body>


</html>