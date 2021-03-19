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
    
    if (isset($_POST['proceso']) == 'procesar'){

    // variables
    $carpeta = $_POST['directorio'];
    $validar_nombre_archivo = $_POST['archivo'];
    $nombre_archivo = $_POST['archivo']. ".txt";
    $texto = $_POST['texto'];
    $ruta = ($carpeta . "/" . $nombre_archivo);
    $mostrar_archivos = scandir("../notepad+++" , 1);
    


    if (!empty($carpeta) && !empty($validar_nombre_archivo)) {
    //Creacion de la carpeta
        if (!file_exists($carpeta)) {
            mkdir($carpeta);
            echo ("<h2>Carpeta creada exitosamente</h2>");
            echo ("<br>Nombre de la carpeta creada: " .$carpeta);
        } else {
            echo ("<h2>Carpeta ya existe</h2>");
            echo ("<br>Nombre de la carpeta: " .$carpeta);
        }

    //Cambio de directorio
    chdir($carpeta);
    


    //Creacion del archivo
        if (!file_exists($nombre_archivo)) {
            $fp = fopen($nombre_archivo, "w");
            echo ("<br>Nombre del archivo creado: " .$nombre_archivo);

        } else {
            echo("<br><h2> El archivo ya existe en el directorio</h2>");
            echo("Se ha sobrescrito el texto");
            $fp = fopen($nombre_archivo, "w+");
        }

        fwrite($fp, $texto);



    }else {
        echo("<h2>Por favor rellene todos los campos</h2>");
    }

    echo ("<a href=descarga.php?file=".$nombre_archivo."&folder=".$carpeta."><button>Descargar</button></a>");
    echo("<br><br> Arreglo con los nombres de los archivos de la carpeta principal: ");
    print_r($mostrar_archivos);
  



    } 
    ?>

    <div id="regresar">
    <a href="index.php"><button>Regresar</button></a>
    </div>
</body>
</html>