<?php

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];

if(isset($name, $lastname, $email, $telephone, $password)){
    require '../connection/db_connection.php';

    $creation_query = "INSERT INTO users (name, lastname, email, telephone, password, creation_date)
    VALUES ('$name', '$lastname', '$email', '$telephone', '$password', NOW())";

    if($conn->connect_error || $conn->error){
        die("Connection failed: $conn->connect_error");
    } else {
        mysqli_query($conn, $creation_query);
        header("location: ../../views/logged.php");
    }

    echo 'Registro exitoso';
} else {
    echo 'Registro no exitoso';
}

?>