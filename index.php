<!DOCTYPE php>
<php lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento 1</title>
    <link rel="stylesheet" href="Archivo de estilo.css">
</head>
<body>
    
<h1>Dario Davila Godinez</h1>
<div class="contenido">

    </div>

    <div class="nav">
        <a href="index.php">Hacia index.php</a>
        <a href="formulario.php">Hacia formulario.php</a>
    </div>

    <?php
        $nombre = "Dario";
        echo "Hola $nombre";
    ?>
    <p>
    <?php 
        $arreglo = ['nombre'=> 'Dario', 'edad' =>21];
        foreach($arreglo as $llave => $datos){
            echo "$llave : $dastos<br>";
        } 
            
        

    ?>
    </p>
</body>
</php>