<?php
require "connexio.php";
session_start();
    //recoger los valores por POST de usuario y contraseña introducida por el cliente.
    $username =$_POST['email'];
    $password = $_POST['pass']; 
    
    $sql = "SELECT count(*) as 'lo'  FROM usuaris where usuari="."'$username'"." and password='$password'";
    
    $result = $conn -> query($sql);
    
    if($result==null){
        echo "error :". mysqli_error($conn). "\n";
        }   
        // realizo un bucle para comrpobar que existe el usurio comparamos el usuario de la variable de sessión con el usuario y su contraseña de la base de datos
    foreach($result as $row){
        if($row['lo']>0){
            // "conectado!";
            $_SESSION ['usuari']=$username;
        }else{
        }
    }
header("Location: ./../index.php");
?>