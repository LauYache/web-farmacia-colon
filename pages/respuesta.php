<?php
        include_once("../componentes/header.php"); 
    ?>
<div class="respuesta-form">
<ul>
<?php


if(isset($_GET['nombre'])){

    $nombre= $_GET['nombre'];

    echo "<h3>Gracias por tu respuesta, $nombre 😀</h3>";

}

echo "<p>Tus datos de contacto son: <p>";

if(isset($_GET['telefono'])){

    $tel= $_GET['telefono'];
    echo "<li>Telefono: $tel</li>";
}
if(isset($_GET['correo'])){

    $correo= $_GET['correo'];
    echo "<li>Correo: $correo</li>";

}
if(isset($_GET['comentarios'])){
    $comentarios= $_GET['comentarios'];
    echo "<li>Comentarios: $comentarios</li>";

}

if(isset($_GET['newsletter'])){

    $newsletter= $_GET['newsletter'];

    echo "<p>Pronto recibiras novedades </p>";
}

?>
</ul>
</div>

<?php
        include_once("../componentes/footer.php"); 
    ?>