<!DOCTYPE html>
<html lang="en">
    <?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc3/include/head.php');
    ?>

    <body>       
        <nav id="topbar" class="navbar bg-primary dark" align="center" title="barra de navegación">
        <div class="container">
          <a class="navbar-brand" pointer="main-header" href="http://dep.fismat.ibero.mx/sdc3/">SDC<sub>2</sub></a>
            <div class="d-flex">
              <div class="nav-item dropdown" id="herramientas-programa">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Enlaces
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="zoom-programa">
                  <li><a class="dropdown-item" href="https://zoom.us/support/download" target="_blank">Descargar zoom</a></li>
                  <li><a class="dropdown-item" href="https://support.zoom.us/hc/es/articles/206618765-Tutoriales-de-Zoom-en-video" target="_blank">Tutorial de Zoom</a></li>
                  <li><a class="dropdown-item" href="https://ibero.mx/sites/all/themes/ibero/descargables/publicaciones/CIENCIA-BOTEPRONTO.pdf" target="_blank">Ciencia de Botepronto (pdf)</a></li>
                </ul>
              </div>
            </div>
        </div>
      </nav>

    <div class="content">
      <div class="responsive">
        <div class="section-box" id="evento" title="simposio">
          <div class="header-background">
              <h2 class="section-header">Evento</h2>
          </div>
          <label class="screenreader-text">Evento</label>
          <section name="evento">
            <p style="text-align: justify;">
              Para acceder al Simposio haz clic en el siguiente enlace y proporciona los datos que se piden:
            </p>
            <div class="centered">
              <a id="event-button" class="btn btn-primary" pointer="registro" role="button" href="https://ibero.zoom.us/webinar/register/WN_MdEkMPe7R7eRrbJR6z7d-g" target="_blank">Registro a la sala</a>
            </div>
            <p style="text-align: justify;">
              <br>              
              <span style="font-weight: bold;">Utiliza el mismo nombre y la misma dirección de correo electrónico que utilizaste en tu registro la primera vez. </span> Al completar tu registro a la sala recibirás un correo electrónico con la liga para acceder al evento en Zoom.

              <br><br>
              <span style="font-weight: bold">Nota: el Simposio comienza el día martes 16 de noviembre a las 8:30 AM, y a las 9:00 AM los días miércoles 17 y jueves 18 de noviembre, hora local de Ciudad de México.</span>
            </p>
            <p style="text-align: justify;">
              Consulta <a href="/sdc3/programa.php" target="_blank">aquí el programa detallado del evento</a>.
            
          </p>
            <div class="header-background">
              <h2 class="section-header">Programa simplificado</h2>
          </div>
          <label class="screenreader-text">Programa simplificado</label>

          <img id="programa-simplificado" src="/sdc3/img/programa.png">
          
          </section>
         </div> 
         <?php
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc3/include/footer.php');
          ?>
        </div>
          
      </div>
  </body>
</html>