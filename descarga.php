
<?php
$nombre_archivo=basename($_GET['file']);
$carpeta_archivo =basename($_GET['folder']);

if (!empty($nombre_archivo)) {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$nombre_archivo");
    header("Content-Type: text/plain");
    readfile($carpeta_archivo."/".$nombre_archivo);
} else {
    echo("FATAL ERROR: NO EXISTE EL ARCHIVO");
}




exit;

?>




