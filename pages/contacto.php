<?php
        include_once("../componentes/header.php"); 
?>

    <main class="container-fluid ">
      <div >
        <h1 class="encabezado">Contacto</h1>
      </div>
        
    </main>

    <div class="container-fluid">

      <h2>Formulario de contacto</h2>
      <form action="respuesta.php" method="get">
        <div class="formulario">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" placeholder="Nombre completo">
        </div>
        <div class="formulario">
          <label for="telefono">Telefono:</label>
          <input type="tel" id="telefono" name="telefono" placeholder="15-3434-4343">
        </div>
        <div class="formulario">
          <label for="correo">Correo Electrónico:</label>
          <input type="correo" id="correo" name="correo" placeholder="nombre@ejemplo.com">
        </div>
  
        <div class="formulario">
          <label for="comentarios">Mensaje:</label>
          <textarea id="comentarios" name="comentarios" placeholder="Escribe cualquier comentario o sugerencia..." rows="5"></textarea>
        </div>
  
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
          Suscribite a nuestras ofertas
          </label>
        </div>
        <button type="submit" class="btn btn-outline-success">Enviar</button>
      </form>
    </div>
    <?php
        include_once("../componentes/footer.php"); 
    ?>

