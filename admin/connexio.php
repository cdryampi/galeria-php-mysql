<?php
$conn =  mysqli_connect('localhost', 'fotos', 'thos','fotos');
if (!$conn) {
    die('No pudo conectarse: ' . mysql_error());
}
?>