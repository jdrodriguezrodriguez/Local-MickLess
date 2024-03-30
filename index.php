  <?php
    include_once("db.php");
  ?>
          

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mickless</title>
    <!--DISEÑO PRINCIPAL-->
    <link rel="icon" href="image/icono.png">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <!--MENU REGISTRO-->
    <script src="./js/script.js" defer></script>
    <script src="./js/script-overlay.js" defer></script>
    <script src="./js/script carrito.js"></script>
    

  </head>
  <body>
    <header>
      <nav>
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
            

            <?php
                session_start();
                if(isset($_SESSION['usuario'])){
                  echo'
                  <nav id="acceso" class="Nav2">
                    <ul class="desplegable-acceso">
                      <li><a href="#" id="menu-trigger">Acceso</a>
                          <ul>
                             <li style="font-size: 1.2rem; padding-bottom: 20px; color: #f6be00;">TU CUENTA</li>
                              <li><a href="#" style="color: white;">'.ucwords($_SESSION['usuario']).'</a></li>
                              <li><a href="#">Ajustes</a></li>
                              <li><a href="cerrar.php">Salir</a></li>
                          </ul>
                      </li>
                    </ul>      
                  </nav>';
                } else{
                  echo'
                  <nav id="acceso" class="Nav2">
                    <ul class="desplegable-acceso">
                      <li><a href="#" id="menu-trigger">Acceso</a> 
                      </li>
                    </ul>      
                  </nav>';
                }

                include_once("db.php");
              ?>
            

            

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
                      <h1 style="color: wheat; font-size: 2rem;">Crear Cuenta</h1><br>
                      <p>¡Únete a nosotros! <br> Completa el formulario para crear una cuenta.</p><br>
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

            <!--CARRITO:-->
            <nav class="Nav3" >
              <a href="carrito.php" style="text-decoration: none;">
                <div class="cart-icon">
                    <img src="image/Carrito - blanco.png" alt="Carrito de Compras">
                    <span class="cart-count">0</span>
                </div>
              </a>
            </nav>    


        </div>



      </nav>
        
    </header>

<!-- DESTACADOS -->
    <div class="tittle-clothes">
      <h1>Nuestros Destacados</h1>
    </div>
    <div class="container">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img class="image-item" src="image/Hombre/zapatos/bad bunny campus adidas.jpg" alt="img-1" />
          <img class="image-item" src="image/Hombre/zapatos/DC SHOES.jpg" alt="img-2" />
          <a href="New Balance 550.html"><img class="image-item" src="image/Hombre/zapatos/New Balance 550.jpg" alt="img-3" />
          </a>
          <img class="image-item" src="image/Hombre/zapatos/Nike Air Forece One one low.jpg" alt="img-4" />
          <img class="image-item" src="image/Hombre/zapatos/adidas-adi-3000-purple.png" alt="img-5" />
          <img class="image-item" src="image/Hombre/zapatos/Versace Chain.jpg" alt="img-6" />
          <img class="image-item" src="image/Hombre/zapatos/adidas_Zapato_Hombre_adidas_Performance_Grand_Court_Base-removebg-preview.png" alt="img-6" />
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>

    <section class="informacion">
      <div class="info-titulo">
        <h1 style="font-size: 2rem;">Tienda de ropa MickLess</h1><br>
      </div>
      <div class="info-descripcion">
        <p style="font-size: 1.5rem;"><b >MickLess</b> Es una tienda de ropa online en la que encuentras las últimas tendencias de moda para mujer, hombre, niños, niñas y bebés. Somos una marca de ropa colombiana enfocada en fomentar un estilo de vida juvenil, femenino, relajado y urbano. Tenemos para ti los mejores estilos y diseños para que luzcas a la moda sin esfuerzo. No te pierdas lo nuevo que te trae la temporada y llévate los looks trendy que más te gusten. </p>
      </div>
      
    </section>

<!-- PIE DE PAGINA -->
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
          <div class="footer-links">

              <h4>Siguenos</h4>
              <div class="social-link">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
          </div>

      </div>

  </div>

</footer>
    
        <div style="display: none;" id="contenedor-articulos"></div>
        <script src="./js/script-catalogo.js"></script>
        
  </body>
</html>
