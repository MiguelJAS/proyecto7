<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://kit.fontawesome.com/f04b85138d.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/optimus.css" />
    <title>Optimus Pro // Software</title>
  </head>
  <body>
    <div class="wrapper">
    <header>
      <div class="contenedor-navegacion">
        <nav class="nav-principal contenedor-header">
          <a href="#"><img src="assets/images/logoActualizado.png" id="logotipo"></a>
          <a class="nav-principal-boton" href="index.html">Inicio</a>
          <a class="nav-principal-boton" href="nosotros.html">Productos</a>
          <a class="nav-principal-boton" href="http://"><i class="fa-solid fa-code"></a></i>
          <a class="nav-principal-boton" href="blog.html">Blog</a>
          <a class="nav-principal-boton" href="contacto.html">Contacto</a>
          <div class="social-media">
            <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github-alt"></i></a>
            <a href="https://www.linkedin.com/home" target="_blank"><i class="fa-brands fa-linkedin"></i>
            <a href="https://twitter.com/?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </div>
        </nav>
      </div>
    </header>
    <div>
        @yield('content')
    </div>
    <footer class="site-footer">
      <div class="grid-footer contenedor">
        <div class="apartadofooter">
          <h3>Categorías</h3>
          <nav class="footer-menu">
            <a class="enlace" href="">Desarrollo Web</a>
            <a href="">Desarrollo Móvil</a>
            <a href="">Diseño Responsive</a>
            </nav>
        </div>
        <div class="apartadofooter">
          <h3>Sobre Nosotros</h3>
          <nav class="footer-menu">
            <a href="">Nuestra Historia</a>
            <a href="">Misión, Visión y Valores</a>
            <a href="">Trabaja con nosotros</a>
            <a href="">Política de Privacidad</a>
            <a href="">Términos del Servicio</a>
          </nav>
        </div>
        <div class="apartadofooter">
          <h3>Soporte</h3>
          <nav class="footer-menu">
            <a href="">Preguntas Frecuentes</a>
            <a href="">Ayuda en línea</a>
            <a href="">Contacto</a>
          </nav>
        </div>
    </div>
    <p class="copyright"><i class="fa-regular fa-copyright"></i>2021-2022 Optimus Pro Software S.L. Todos los derechos reservados.</p>

    </footer>
    </div>
  </body>
</html>

