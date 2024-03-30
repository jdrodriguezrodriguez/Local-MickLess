<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mickless</title>
    <!--DISEÑO PRINCIPAL-->
    <link rel="icon" href="image/icono.png">
    <link rel="stylesheet" href="index.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <!--CARRITO:-->
    <link rel="stylesheet" href="carrito.css">
    
    <script src="./js/script.js" defer></script>
    <script src="./js/script-overlay.js" defer></script>


  </head>
  <body>
    <header>
        <div class="LogoPrincipal">
            <a href="index.php"><img class="ImagenPrincipal" src="image/principal.png" width="200" class="imagen-ajustada">
            </a>
        </div>
        <div class="contenedor1">
            <div class="BarraFondo"></div>
        </div>
        <div class="contenedor2">
            <div class="circulo"></div>
        </div>
        <div class="contenedor3">
            <div class="CuadradoFondo"></div>
        </div>

        <div class="contenedor-nav">
            <nav class="Nav1">
                <ul class="desplegable">
                    <li><a href="catalogo.php">Hombre</a>
                        <ul>
                            <li><a href="Hombre.html">Ropa</a></li>
                            <li><a href="#">Accesorios</a></li>
                            <li><a href="#">Zapatos</a></li>
                        </ul>
                        </li>           
                    <li><a href="Mujer.html">Mujer</a>
                        <ul>
                            <li><a href="Hombre.html">Ropa</a></li>
                            <li><a href="#">Zapatos </a></li>
                            <li><a href="#">Accesorios </a></li>
                            <li><a href="#">Colecciones</a></li>
                        </ul>
                        </li>
                    <li><a href="Accesorios.html">Accesorios</a>
                        <ul>
                            <li><a href="#">Anillos</a></li>
                            <li><a href="#">reloj</a></li>
                            <li><a href="#">Maquillaje</a></li>
                        </ul>
                    </li>
                </ul>      
            </nav>

            <nav class="menu-buscador">
                <input class="buscador" type="text" id="input-busqueda" placeholder="Buscar aqui">
            </nav>
            
            <nav class="Nav2">
              <ul>
                  <li><a href="#" id="menu-trigger">Acceso</a></li>
              </ul>
            </nav>

          <!--ACCESO-->
            <div id="overlay"></div>
          
            <div id="menu" class="hidden">
              <ul>
                  <h3 style="padding-bottom: 10%;">Mi cuenta</h3>
                  <li style="background-color: rgba(24, 18, 18, 0.61);"><a href="http://localhost/Local-MickLess/Acceso.php">Iniciar sesion</a></li>
                  <li style="background-color: rgb(255, 255, 255);"><a href="#" id="menu-trigger-registro">Registrarse</a></li>
              </ul>
            </div>       

         <!--REGISTRO-->
         <div id="overlay-registro"></div>
        
         <div id="menu-registro" class="hidden-registro">

           <ul>
             <div class="signup-header">
               <h1 style="color: wheat;">Crear Cuenta</h1><br>
               <p>¡Únete a nosotros! <br> Completa el formulario para crear una cuenta.</p>
           </div>
          
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
             <button class="btn-registrar" type="submit" name="registro">Registrarse</button>
             <div class="login">
                 <p>¿Ya tienes una cuenta? <a href="./Acceso.php">Inicia Sesión</a></p>
             </div>
          </form>

         </div>  

         <!--Script OVERLAY (Registro)-->
         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            

            <nav class="Nav3" >
              <a href="carrito.html" style="text-decoration: none;">
                <div class="cart-icon">
                    <img src="image/Carrito - blanco.png" alt="Carrito de Compras">
                    <span class="cart-count">0</span>
                </div>
            </a>
            </nav>    
        </div>
    </header>

<body>
   <div class="container-carrito">
        <h1 style="text-align: center; padding: 1rem;" >Productos en el Carrito</h1>
        <div class="cart">
            <h2>Carrito de Compras</h2>
            <ul class="cart-items">
                <!-- Los elementos del carrito se agregarán aquí -->
            </ul>
            
        </div>

        <!-- Botón para seguir comprando -->
        <a href="index.php" class="continue-shopping-button">Seguir Comprando</a>
        
        <button id="vaciar-carrito" class="vaciar-carrito-button">Vaciar Carrito</button>

        
        <article class="pago" >
            <div>
            <h3 class="total-amount">Total:</h3>
            </div>

            <div class="pay">
            <h1>
                <a href="pagar.php">Pagar</a>
            </h1>
            </div>
        </article>
        
    </div>



    
    <script src="./js/script carrito.js"></script>

</body> <br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="footer">

  <div class="container-footer">

      <div class="footer-row">

          <div class="footer-links">

              <h4>Compañia</h4>
              <ul>
                  <li><a href="#">Nosotros</a></li>
                  <li><a href="#">Nuestros Servicios</a></li>
                  <li><a href="#">Politica de Privacidad</a></li>
              </ul>

          </div>
          <div class="footer-links">

              <h4>Ayuda</h4>
              <ul>
                  <li><a href="#">Preguntas</a></li>
                  <li><a href="#">Compras</a></li>
                  <li><a href="#">Pago</a></li>
              </ul>

          </div>
          
</footer>