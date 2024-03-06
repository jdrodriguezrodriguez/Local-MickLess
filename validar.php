    <?php
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        session_start();
        $_SESSION["usuario"]=$usuario;

        include("db.php");

        $consulta="SELECT * FROM usuarios where usu_nombre='$usuario' and contraseña='$contraseña'";

        $resultado=mysqli_query($conexion, $consulta);

        $filas=mysqli_num_rows($resultado);

        
        
        if ($filas) {
            echo '<script>alert("Bienvenido!");</script>';
            echo '<script>window.location.href = "http://127.0.0.1:5501/index.html";</script>';
        } else {
            include("Acceso.php");
            echo '<script>alert("ERROR DE AUTENTICACION, VERIFICA LOS DATOS.");</script>';
        }




        mysqli_free_result(($resultado));
        mysqli_close(($conexion));
    ?> 