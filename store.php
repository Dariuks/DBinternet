<?php
include('conexion.php');
    if(count($_post) > 0){

        $tarea = $_post['tarea'];
        $descripcion = $_post['descripcion'];
        $etiqueta = $_post['etiqueta'];

        $sql = "INSERT INTO tareas (tarea, descripcion, etiqueta) VALUES ('$tarea','$descripcion','$etiqueta')";

        $conn->exec($sql);

        //echo "<b>$tarea</b><br>";
        //echo "<b>$descripcion</b><br>";
        //echo "<b>$etiqueta</b><br>";
        header('Location: formulario.php');
    }
?>