<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./styles-php/Style_Accounts.css">

    <title>Login</title>
</head>

<body>
        <style>
            body{
                background-image: url("image/Acceder.jpg");
            }
        </style>
        <div class="container">
            <div class="login-container">
                <div class="login-header">
                    <h1>Ingresar</h1>
                    <p>¡Bienvenido de nuevo! <br> Por favor, ingrese a su cuenta.</p>
                </div>
                <form class="login-form" action="validar.php" method="post">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" placeholder="Ingrese su nombre" id="username" name="usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" placeholder="Ingrese su contraseña" id="password" name="contraseña" required>
                    </div>
                    <button class="ingresar" type="submit" value="Ingresar" >Ingresar</button>
                </form>
                <div class="additional-options">
                    <a href="registro.html">Crear cuenta</a>
                    <p>o</p>
                    <a href="index.html">Volveral inicio</a>
                    
                </div><br><br>
            </div>
        </div>
</body>
</html>
