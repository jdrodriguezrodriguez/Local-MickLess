    <?php
        include("db.php");
        
        session_start();
        if(!isset($_SESSION['usuario'])){
            echo '<script>alert("Para comprar, ingresa a tu cuenta");</script>';
            echo '<script>window.location.href = "Acceso.php";</script>';
            exit; 
        } else {
            echo '<script>alert("Sigue comprando!");</script>';
            echo '<script>window.location.href = "carrito.php";</script>';
            exit; 
        }
    ?>
