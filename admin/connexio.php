<?php
$conn =  mysqli_connect('localhost', 'yampi', 'thos','yampi');
if (!$conn) {
    die('No pudo conectarse: ' . mysql_error());
}
?>