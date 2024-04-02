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
    <!--SECCION DE HOMBRES-->
    <link rel="stylesheet" href="Hombre.css">
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
                          <li><a href="catalogo.php">Ropa</a></li>
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
                              <li><a href="#" style="color: white;  right: 1rem;">'.ucwords($_SESSION['usuario']).'</a></li>
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

    <!--CATEGORIAS-->
    <section class="titulos-section">
       
      <div class="contenedor-titulo">
          <h1>CATEGORIA PARA HOMBRES</h1>
      </div>
  </section>

  <!--
  <section class="categories">

      <article class="post-categoria" data-categoria="camisetas">
          <a class="no-underline" href="">
              <img src="/HTML/Mick Less/Proyecto final/image/Hombre/camisetas/Russell camiseta atlética para entrenar para hombre.jpg" width="105" >
              <h4>Camisetas</h4>
          </a>
      </article>

      <article class="post-categoria" data-categoria="zapatos">
          <a class="no-underline" href="">
              <img src="/HTML/Mick Less/Proyecto final/image/Hombre/zapatos/DC SHOES.jpg" width="150">
              <h4>Zapatos</h4>
          </a>
      </article>

      <article class="post-categoria" data-categoria="accesorios">
          <a class="no-underline" href="">
              <img src="image/Hombre/" width="150">
              <h4>Accesorios</h4>
          </a>
      </article>

      <article class="post-categoria" data-categoria="ofertas">
          <a class="no-underline" href="">
              <br><br><img src="image/Post - Hombre/Nike Air Jordan 1.jpg" width="150">
              <h4>Ofertas</h4>
          </a>
      </article>

      <article class="post-categories">
          <a class="no-underline" href="">
              <img src="image/Hombre/chaquetas/Chaqueta acolchada ligera y resistente al agua para hombre (disponible en tallas Big y Tall).jpg" width="85">
              <h4>Chaquetas</h4>
          </a>
      </article>
  </section> -->

  <!-- CATEGORIAS -->

  <section class="categorias">
      <article class="post-categoria" data-categoria="zapatos">
          <img src="image/Hombre/zapatos/Reebok Club C-85.png" width="140" >
          <h2>Zapatos</h2>
      </article>
      <article class="post-categoria" data-categoria="camisetas">
          <img src="image/Hombre/camisetas/COOFANDY_Camisa_casual_Henley_para_hombre__manga_corta.png" width="105" >
          <h2>Camisetas</h2>
      </article>
      <article class="post-categoria" data-categoria="accesorios">
          <img src="image/Hombre/accesorios/Collar de cruz - Acero.jpg" width="150" >
          <h2>Accesorios</h2>
      </article>
      <article class="post-categoria" data-categoria="ofertas">
          <img src="image/Hombre/camisetas/SOLY_HUX_Camisetas_gráficas-removebg-preview.png" width="105" >
          <h2>Ofertas</h2>
      </article>
      <article class="post-categoria" data-categoria="chaquetas">
          <img src="image/Hombre/chaquetas/COOFANDY_-_Chaqueta_universitaria_de_moda_para_hombre__infor.png" width="85" >
          <h2>Chaquetas</h2>
      </article>
  </section>
  
 <!-- PRODUCTOS -->

  <div id="contenedor-articulos"></div>
  <script src="./js/script-catalogo.js"></script>

  

</body>
</html>
