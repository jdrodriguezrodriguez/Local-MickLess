    <?php
        session_start();
        if(!isset($_SESSION['usuario'])){
            echo '<script>alert("¡Hola! Para comprar, ingresa a tu cuenta");</script>';

            header("location: Acceso.php");
        }else{
            echo '<script>alert("Sigue comprando!");</script>';
            header('location: carrito.php');
        }
    ?>