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
<h1 align="center">Creacion de directorios </h1> <br><br>

<form method="POST" action="proceso.php">
<table border="1" align="center">
    <tr>
        <td> Nombre de la carpeta</td> 
        <td><input type="text" name="directorio"></td>
    </tr>

    <tr>
        <td>Nombre del archivo a crear</td>
        <td><input type="text" name="archivo"></td>
    </tr>
</table>
<table border="1" align="center">

    <tr>
       <td><input type="submit" name="proceso" value="procesar"></td>
       <td align="center"><input type="reset" name="limpiar" value="Limpiar"></td>
    
    </tr>


</table>
    
</form>
</body>
</html>