<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-php/acceso.css">
    <title>login</title>
</head>
<body>
    <section>
        <form action="validar.php" method="post">
            <h1>Inicio</h1>
            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text"  id="username" name="usuario" required>
                <label for="">Usuario</label>
            </div>
            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password"  id="password" name="contraseña" required>
                <label for="">Contraseña</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Recordar</label>
                <a href="#">Olvidé la Contraseña</a>
            </div>
            <button type="submit" value="Ingresar" >Iniciar</button>
            <div class="register">
                <p>No tienes cuenta? <a href="./registro.php">Registrate</a></p>
            </div>
        </form>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>