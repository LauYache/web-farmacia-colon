<?php
        include_once("../componentes/header.php"); 
    ?>
    <main>

  <main class="container-fluid ">
      <div class="encabezado">
        <h1>¡Bienvenido a Farmacia Colon!</h1>
        <em>Tu salud es nuestra prioridad.
        </em>
      </div>
    </main>

    <section class="ofertas-especiales">
      <h2>Ofertas Especiales</h2>

    <div id="carouselExampleCaptions" class="carousel slide">
    
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="/imagenes/oferta2.png"class = "img" alt="Oferta Especial - Imagen 1" title="Oferta Especial - Imagen 1 - 20% descuento cremas">
          <div class="carousel-caption">
              <p class="parrafo-carrousel">¡Aprovecha nuestros descuentos exclusivos en una amplia gama de productos! Desde medicamentos hasta artículos de cuidado personal, estamos aquí para tu salud.</p>
          </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
          <img  src="/imagenes/oferta2.png" alt="Oferta Especial - Imagen 2" width="350" height="200" title="Oferta Especial - Imagen 2 - 2x1 cuidado personal">
          <div class="carousel-caption">
              <p class="parrafo-carrousel">Descubre la calidad en cada detalle. Nuestros productos están seleccionados para garantizar tu satisfacción y bienestar. No te pierdas nuestras ofertas especiales en productos de alta calidad.</p>
          </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
          <img src="/imagenes/oferta3.png" alt="Oferta Especial - Imagen 3" width="350" height="200" title="Oferta Especial - Imagen 3 - 30% descuento jueves jubilados">
          <div class="carousel-caption">
              <p class="parrafo-carrousel">Enfocados en tu bienestar, te ofrecemos promociones exclusivas. Desde vitaminas hasta productos de cuidado infantil, encontrarás todo lo que necesitas para una vida saludable.</p>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>



    </main>
    <?php
        include_once("../componentes/footer.php"); 
    ?>
    


