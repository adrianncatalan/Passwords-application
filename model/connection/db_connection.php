<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_passwords";

// Crear conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>