<?php
    if(isset($_POST["registro"])) {
        include("db.php");


        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];
        $password = $_POST["password"];


        $sql = "INSERT INTO usuarios (usu_nombre, usu_telefono, usu_correo, contraseña) VALUES ('$nombre', '$celular', '$email', '$password')";

        if($conexion->query($sql) === TRUE) {

            echo '<script>alert("USUARIO CREADO CORRECTAMENTE");</script>';

            echo '<script>window.location.href = "index.php";</script>';
        } else {

            echo '<script>alert("ERROR AL REGISTRAR: ' . $conexion->error . '");</script>';
        }


        $conexion->close();
    }
?>
