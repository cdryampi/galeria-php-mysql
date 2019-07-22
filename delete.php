<?php
session_start();
$enlace =  mysqli_connect('localhost', 'yampi', 'thos','yampi');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
$sql = "delete from usuarios where email='cdryampi@gmail.com'";
$return = mysqli_query($enlace,$sql);
mysqli_close($enlace);
header('Location: index.php');
?>