<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento 2</title>
    <link rel="stylesheet" href="Archivo de estilo.css">
</head>
<body>
    <?php
    include('conexion.php')
    ?>
    <h1>Formulario</h1>
    <form action="store.php" method="post">
        <label for="tarea">Tarea</label>
        <input type="text" name="tarea">
        <br>
        <label for="descripcion">Descripcionl</label>
        <input type="text" name="descripcion">
        <br>
        <label for="etiqueta">Etiqueta:</label>
        <select name="etiqueta">
            <option value="Escuela">Escuela</option>
            <option value="Personal">Personal</option>
            <option value="Trabajo">Trabajo</option>
        </select>
        <br>
        <input type="Enviar" value="Enviar">
    


    <?php 

    ?>
</body>
</html>