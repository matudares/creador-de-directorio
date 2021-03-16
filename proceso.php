<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad+++</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BLOC DE NOTAS+++</h1>
    <?php
    //
    if (isset($_POST['proceso']) == 'procesar'){

    // variables
    $carpeta = $_POST['directorio'];
    $nombre_archivo = $_POST['archivo'];
    if (!empty($carpeta) or !empty($nombre_archivo)) {

        if (!file_exists($carpeta)) {
            mkdir($carpeta);
            echo ("<p>Carpeta creada exitosamente</p>");
        } else {
            echo ("<p>Carpeta ya existe</p>");    
        }

    }
    echo ("<br>" .$nombre_archivo);
    
    }
    ?>
</body>
</html>