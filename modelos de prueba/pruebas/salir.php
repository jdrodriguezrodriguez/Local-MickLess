<?php
session_start();

// Finalizar la sesión
session_unset();
session_destroy();

// Redirigir al usuario al formulario de inicio de sesión
header("location: login.php");
exit;
?>
