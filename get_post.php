<?php

session_start();
echo "<pre>";
print_r($_POST);
echo "<br/>";
echo session_id();
print_r($_FILES);
print_r($_SESSION);
echo "</pre>";

$enlace =  mysqli_connect('localhost', 'yampi', 'thos','yampi');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
print_r($enlace);
$fecha= date("Y-m-d H:i:s");
$insert= "insert into usuarios(nombre,email,contrasenya) values('yampi2','cdryampi@gmail.com','thos')";
echo $insert;
$return = mysqli_query($enlace,$insert);
print_r(($return));
mysqli_close($enlace);

?>
