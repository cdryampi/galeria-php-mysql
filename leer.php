<?php
session_start();
$enlace =  mysqli_connect('localhost', 'yampi', 'thos','yampi');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo "<pre>";

$sql = "select * from usuarios";
$resultado = mysqli_query($enlace, $sql);
$rows = mysqli_fetch_array($resultado,MYSQLI_NUM);
print_r($rows);
// MYSQLI_NUM nos devulve con un indice numerico y ASSOC no devuelve con el nombre asociado. BOTH devuelve las dos formas
do{
    $data[]= ($rows);
}while($rows = mysqli_fetch_array($resultado,MYSQLI_BOTH));
print_r($data);
echo "</pre>";
echo "<a href=\"update.php\">Actualuzar</a>"
?>