<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

// Include the main script
require_once($directory_prefix . "php/main.php");
?>



<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="author" content="Jana Stojić, Vedran Kravaica, David Vrčković">
    <meta name="description" content="A website to help students get more confidence with Math because it Matters.">
    <meta name="keywords" content="Math, Mathematics">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Favicon -->
    <title> MathMatters | Gradivo </title>
    <link href="<?php echo ($directory_prefix . 'Images/logo.png'); ?>" rel="icon" type="image/png">

    <!-- CSS files & JS scripts -->
    <link href="razred1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo ($directory_prefix . 'Styles/navigation.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo ($directory_prefix . 'Styles/footer.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Icons and Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>



<body>
    <!-- JS scripts -->


    <!-- Header & Navigation -->
    <header>

        <!-- Left Navigation -->
        <nav class="links" id="nav_links">

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . ''); ?>" id="home_link">

                <!-- Navigation link icon -->
                <i class="fa-solid fa-house" id="home_icon"></i>

            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'classes'); ?>">
                Razredi
            </a>

            <!-- Navigation link -->
            <a class="nav_link nav_active" href="<?php echo ($directory_prefix . 'lectures'); ?>">
                Gradivo
            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'matura'); ?>">
                Primjeri s mature
            </a>

            <!-- Navigation dialog -->
            <dialog class="menu" id="nav_menu_dialog">

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . ''); ?>">
                    Naslovnica
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'classes'); ?>">
                    Razredi
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'lectures'); ?>">
                    Gradivo
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'matura'); ?>">
                    Primjeti s mature
                </a>

            </dialog>

        </nav>

        <!-- Right Navigation -->
        <nav class="options" id="nav_options">

            <?php
            if (!isset($_SESSION["loggedin"])) {
                echo ('
                    <a class="nav_link" href="' . $directory_prefix . 'login">
                        Prijavi se
                    </a>

                    <a class="nav_link" href="' . $directory_prefix . 'register">
                        Nemate račun?
                    </a>
                ');
            } else {
                echo ('
                    <a class="nav_link" href="' . $directory_prefix . 'account">
                        Račun
                    </a>
                ');
            }
            ?>

        </nav>

    </header>


    <section class="clearfix">
        <h1>MathMatters</h1>
        <h3>1.razred</h3>
    </section>
    <section class="gllekcije">
        <article>
            <div class="gradiva">
                <h2>REALNI BROJEVI</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="natural-numbers" class="cjeline">Prirodni, cijeli i racionalni brojevi</a>
                <a href="REALNI" class="cjeline">Realni brojevi</a>
                <a href="INTER" class="cjeline">Intervali</a>
                <a href="OPER.REAL" class="cjeline">Operacije s realnim brojevima</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>POTENCIJE S CJELOBROJNIM EKSPONENTOM</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="POZ.EKSP" class="cjeline">Potencije s pozitivnim eksponentom</a>
                <a href="POT.NEG" class="cjeline">Potencije s negativnim eksponentom</a>
                <a href="ZNAN.ZAPIS" class="cjeline">Znanstveni zapis realnog broja</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>ALGEBARSKI IZRAZI I RAZLOMCI</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="MONIPOL" class="cjeline">Monomi i polinomi</a>
                <a href="MNOŽ.POL" class="cjeline">Množenje polinoma</a>
                <a href="VR.ALG" class="cjeline">Vrijednost algebarskog izraza</a>
                <a href="FAKT" class="cjeline">Faktorizacija</a>
                <a href="ALG.RAZL" class="cjeline">Algebarski razlomci</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>LINEARNE JEDNADŽBE</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="JEDNA" class="cjeline">Jednadžbe s jednom nepoznanicom</a>
                <a href="JEAPS" class="cjeline">Jednadnžbe s apsolutnim vrijednostima</a>
                <a href="JDVIJE" class="cjeline">Jednadžbe s dvije nepoznanice</a>
                <a href="PRIMJ.JEDN" class="cjeline">Primjena jednadžbi</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>LINEARNE NEJEDNADŽBE</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="NEJJEDNA" class="cjeline">Nejednadžbe s jednom nepoznanicom</a>
                <a href="SUST.JEDN" class="cjeline">Sustavi jednadžbi</a>
                <a href="SLOŽ.NEJ" class="cjeline">Složenije nejednadžbe</a>
                <a href="NEJAPS" class="cjeline">Nejednadžbe s apsolutnim vrijednostima</a>
                <a href="PRIMJ.NEJ" class="cjeline">Primjena nejednadžbi</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>LINEARNE FUNKCIJE</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline">Koordinantni sustav</a>
                <a href="LIN.FUN" class="cjeline">Linearna funkcija</a>
                <a href="FUNK.APS" class="cjeline">Funkcija s apsolutnim vrijednostima</a>
                <a href="SUST.LIN.JEDN" class="cjeline">Sustavi linearnih jednadžbi</a>
                <a href="PRIM.SUS.LIN.JEDN" class="cjeline">Primjena sustava linearnih
                    jednadžbi</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>SUKLADNOST I SLIČNOST</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline">Karakteristične točke trokuta</a>
                <a href="LIN.FUN" class="cjeline">Sukladnost</a>
                <a href="FUNK.APS" class="cjeline">Sličnost</a>
                <a href="SUST.LIN.JEDN" class="cjeline">Talesov poučak</a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2>TRIONOMETRIJA PRAVOKUTNOG TROKUTA</h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline">Trigonometrijske funkcije šiljastog
                    kuta</a>
                <a href="LIN.FUN" class="cjeline">Računanje trigonometrijskih funkcija</a>
                <a href="FUNK.APS" class="cjeline">Primjena trigonometrijskih funkcija</a>
            </div>
        </article>
    </section>
    <footer>
        <p>Kontakt:&nbsp&nbsp
            jstojic@tvz.hr &nbsp&nbsp vkravaica@tvz.hr &nbsp&nbsp dvrckovi@tvz.hr</p>
    </footer>
    <script src="<?php echo ($directory_prefix . 'Scripts/main.js'); ?>"></script>
</body>

</html>