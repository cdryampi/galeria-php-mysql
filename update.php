<?php
session_start();
$enlace =  mysqli_connect('localhost', 'yampi', 'thos','yampi');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}

$update = "update usuarios set nombre= 'Yampi' where email= 'cdryampi@gmail.com'";
$return = mysqli_query($enlace,$update);
print_r($return);

mysqli_close($enlace);
echo "<a href=\"delete.php\">Borrar.</a>";
?>