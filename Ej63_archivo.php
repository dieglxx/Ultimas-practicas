<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <title>guardar informacion</title>
</head>
<body>
     <h2>Guardar informacion en un archivo</h2>
{
<?php
$nombre = "leo salazar";
file_put_contens("alimnos.txt" , $nombre. PHP_EOL,
         FILE_APPEND );
         echo "informacion gurdada correctamente.";
         "echo <br><br>";
{
?>
<?php
$nombre = "leo soto";
file_put_contens("alimnos.txt" , $nombre. PHP_EOL,
         FILE_APPEND );
         echo "informacion gurdada correctamente.";
         

?>
<?php
echo "<br><br>";
$contenido = file_put_contens("alumnos.txt");
//echo $contenido;
echo nL2br($contenido);
?>
</body>
</html>
