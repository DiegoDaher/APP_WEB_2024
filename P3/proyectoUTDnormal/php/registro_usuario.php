<?php

    include 'conexion.php';
    
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password !== $password2) {
        echo 'Las contraseñas no coinciden';
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (username, first_name, last_name, password) VALUES ('$username', '$first_name', '$last_name', '$hashed_password')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo 'Registro exitoso';
    } else {
        echo 'Error en el registro';
    }

?>