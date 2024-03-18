<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-php/registro.css">
    <title>Registro</title>
</head>
<body>
    <section>
        <form action="http://localhost/Local-MickLess/registro-datos.php" method="post">
            <h1>Registro</h1>
            <div class="input-box">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" id="name" name="nombre" required>
                <label for="">Nombre</label>
            </div>
            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" id="email" name="email" required>
                <label for="">Correo Electrónico</label>
            </div>
            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input  type="password" id="newpassword" name="password" required>
                <label for="">Contraseña</label>
            </div>
            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input  type="password" id="newpassword" name="password" required>
                <label for="">Confirmar Contraseña</label>
            </div>
            <button  type="submit" name="registro">Registrarse</button>
            <div class="login">
                <p>¿Ya tienes una cuenta? <a href="./Acceso.php">Inicia Sesión</a></p>
            </div>
        </form>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
