<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/imagenes/farmacia.png">
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap">

    <title>Farmacia Colon</title>
</head>
<body>
    
<header>

        <?php
        $menu = array(
            "Home"=>"../index.php",
            "Contacto"=>"contacto.php",
            "Quienes somos"=>"quienessomos.php",
            "Servicios"=>"servicios.php",
            "Ayuda celiacos" =>"celiacos.php"
            
        );   
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#"><img src="/imagenes/logo.png" alt="Logo" class="logo-navbar"></a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <?php 
                foreach ($menu as $paginas => $link) {
                    echo '<li class="nav-item active"><a class="nav-link" href="' . $link . '">' . $paginas . '</a></li>';
                }
            ?>       
        </ul>
    </div>
 
</nav>


    </header>