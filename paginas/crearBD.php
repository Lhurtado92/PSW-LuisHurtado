<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password);

// Check conn
if (!$conn){
    die("Falló la conexión: " . mysqli_connect_error());
}

//Crear BD
$sql = "CREATE DATABASE bdunad05 CHARACTER SET utf8 COLLATE utf8_spanish_ci";

if (mysqli_query($conn, $sql)){
    echo "La base de datos se creó correctamente";
}else{
    echo "Se produjo un error al crear la base de datos:" . mysqli_error($conn);
}

mysqli_close($conn);

?>