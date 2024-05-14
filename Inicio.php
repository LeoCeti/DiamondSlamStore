<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StylesIndex.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="icon" href="Images/LogoElegido.png" type="image/x-icon">
    <title>Diamond Slam</title>
</head>
<body>

    <div class="Header">
        <nav>
            <img src="Images/LogoElegido.png" class="LogoHeader">
            <ul>
            <?php
                if (isset($_SESSION["UsernameLogin"])){
                echo '<li><a href="database">' . $_SESSION["UsernameLogin"] . '</a></li>';
                    }
            ?>
                <li><a class="enlace" href="AdminCheck.php">Tienda</a></li>
                <li><a class="enlace" href="Logout.php">Cerrar Sesión</a></li>  
            </ul>
        </nav>
    </div>

    <div class="Personajes">
    <img src="Images/WebCharacterDamianT.png" class="CharacterLeft1">
    <img src="Images/WebCharacterNoko.png" class="CharacterLeft2">
    <img src="Images/WebCharacterLena.png" class="CharacterLeft3">
    <img src="Images/WebCharacterZeus.png" class="CharacterRight1">
    <img src="Images/WebCharacterLimes.png" class="CharacterRight2">
    <img src="Images/WebCharacterYase.png" class="CharacterRight3">
    <img src="Images/LogoWebElegido.png" class="LogoPortada">
    </div>
    
    <div class="Conteiner">
    <img src="Images/ImagenPresentacion.png" alt="" class="ImagenPresentacion">
    <section class="Presentacion">

        <H2>Primero que nada... ¡Una presentación!</H2>
        <p>"Diamond Slam" es un proyecto creado por [PLACEHOLDER] y desarrollado por [PLACEHOLDER]. "Diamond Slam" es (o sera) un videojuego de peleas 2D con distintos formatos.
        Diamond Slam contara con un gameplay frenetico, facil de aprender pero desafiante de dominar, una plantilla de diversos personajes listos para la batalla, y mas.</p>
        <p>El objetivo de la "Diamond Slam Store" es ayudar a reunir fondos para financiar el proyecto mediante la venta de mercancia del mismo, diseñada por el creador del videojuego
        [PLACEHOLDER]. Ademas, al crear una cuenta, seras parte de la comunidad y podras ver adelantos, avances, artes conceptuales y mas contenido que no podras ver en ningun otro lado.</p>
  
        <section><H3>¡Gracias por visitarnos!</H3>
            <section class="Disclaimer"><p>(Las imagenes mostradas a continuacion son meramente ilustrativas y pueden no asemejarse al producto final.)</p></section>     
        </section></section>

    </div>

    <div>

    </div>

</body>
</html>

