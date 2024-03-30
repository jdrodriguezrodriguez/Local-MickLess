    <?php
    session_start();
    session_destroy();
    echo '<script>alert("Vuelve pronto");</script>';
    echo '<script>window.location.href = "Acceso.php";</script>';
    ?>