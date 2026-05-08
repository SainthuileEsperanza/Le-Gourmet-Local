<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../VIEW/CSS/style.css">
        <title>
            <?php
                echo $title;
            ?>
        </title>
    </head>
    <body>
        <header>
            <img src="../IMAGES/logo.png" alt="logo">
            <nav>
                <div>
                    <a href="../CONTROLLER/startPage.php">Accueil</a>
                    <img class="decorationTexte" src="../IMAGES/decoration.png" alt="décoration de texte">
                </div>
                <div id="navReservation">
                    <a href="affichageReservation.php">Réservation</a>
                    <img class="decorationTexte2" src="../IMAGES/decoration.png" alt="décoration de texte">
                </div>
                <div id="navReservation">
                    <a href="affichageGalerie.php">Galerie</a>
                    <img class="decorationTexte3" src="../IMAGES/decoration.png" alt="décoration de texte">
                </div>

            </nav>
        </header>
