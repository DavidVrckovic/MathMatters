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
    <script src="<?php echo ($directory_prefix . 'Scripts/main.js'); ?>"></script>

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

            <!-- Navigation link
            <a class="nav_link" id="nav_options_link">

                <form action="/action_page.php">
                    <input type="text" placeholder="Search..." name="search">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>

            </a> -->

        </nav>

    </header>


    <div class="clearfix">
        <h3>MathMatters</h3>
        <div class="container">
            <div class="box1">
                <p class="crtice">--------------</p>
            </div>
            <div class="box2">
                <h1>1.razred</h1>
            </div>
        </div>
    </div>
    <div class="gllekcije">
        <h2>REALNI BROJEVI</h2>
        <div class="selekcija">
            <a href="natural-numbers" class="linklekcije"><button class="lekcije">Prirodni, cijeli i racionalni brojevi</button></a>
            <a href="REALNI" class="linklekcije"><button class="lekcije">Realni brojevi</button></a>
            <a href="INTER" class="linklekcije"><button class="lekcije">Intervali</button></a>
            <a href="OPER.REAL" class="linklekcije"><button class="lekcije">Operacije s realnim brojevima</button></a>
        </div>
        <h2>POTENCIJE S CJELOBROJNIM EKSPONENTOM</h2>
        <div class="selekcija">
            <a href="POZ.EKSP" class="linklekcije"><button class="lekcije">Potencije s pozitivnim eksponentom</button></a>
            <a href="POT.NEG" class="linklekcije"><button class="lekcije">Potencije s negativnim eksponentom</button></a>
            <a href="ZNAN.ZAPIS" class="linklekcije"><button class="lekcije">Znanstveni zapis realnog broja</button></a>
        </div>
        <h2>ALGEBARSKI IZRAZI I RAZLOMCI</h2>
        <div class="selekcija">
            <a href="MONIPOL" class="linklekcije"><button class="lekcije">Monomi i polinomi</button></a>
            <a href="MNOŽ.POL" class="linklekcije"><button class="lekcije">Množenje polinoma</button></a>
            <a href="VR.ALG" class="linklekcije"><button class="lekcije">Vrijednost algebarskog izraza</button></a>
            <a href="FAKT" class="linklekcije"><button class="lekcije">Faktorizacija</button></a>
            <a href="ALG.RAZL" class="linklekcije"><button class="lekcije">Algebarski razlomci</button></a>
        </div>
        <h2>LINEARNE JEDNADŽBE</h2>
        <div class="selekcija">
            <a href="JEDNA" class="linklekcije"><button class="lekcije">Jednadžbe s jednom nepoznanicom</button></a>
            <a href="JEAPS" class="linklekcije"><button class="lekcije">Jednadnžbe s apsolutnim vrijednostima</button></a>
            <a href="JDVIJE" class="linklekcije"><button class="lekcije">Jednadžbe s dvije nepoznanice</button></a>
            <a href="PRIMJ.JEDN" class="linklekcije"><button class="lekcije">Primjena jednadžbi</button></a>
        </div>
        <h2>LINEARNE NEJEDNADŽBE</h2>
        <div class="selekcija">
            <a href="NEJJEDNA" class="linklekcije"><button class="lekcije">Nejednadžbe s jednom nepoznanicom</button></a>
            <a href="SUST.JEDN" class="linklekcije"><button class="lekcije">Sustavi jednadžbi</button></a>
            <a href="SLOŽ.NEJ" class="linklekcije"><button class="lekcije">Složenije nejednadžbe</button></a>
            <a href="NEJAPS" class="linklekcije"><button class="lekcije">Nejednadžbe s apsolutnim vrijednostima</button></a>
            <a href="PRIMJ.NEJ" class="linklekcije"><button class="lekcije">Primjena nejednadžbi</button></a>
        </div>
        <h2>LINEARNE FUNKCIJE</h2>
        <div class="selekcija">
            <a href="KOOR.SUS" class="linklekcije"><button class="lekcije">Koordinantni sustav</button></a>
            <a href="LIN.FUN" class="linklekcije"><button class="lekcije">Linearna funkcija</button></a>
            <a href="FUNK.APS" class="linklekcije"><button class="lekcije">Funkcija s apsolutnim vrijednostima</button></a>
            <a href="SUST.LIN.JEDN" class="linklekcije"><button class="lekcije">Sustavi linearnih jednadžbi</button></a>
            <a href="PRIM.SUS.LIN.JEDN" class="linklekcije"><button class="lekcije">Primjena sustava linearnih
                    jednadžbi</button></a>
        </div>
        <h2>SUKLADNOST I SLIČNOST</h2>
        <div class="selekcija">
            <a href="KOOR.SUS" class="linklekcije"><button class="lekcije">Karakteristične točke trokuta</button></a>
            <a href="LIN.FUN" class="linklekcije"><button class="lekcije">Sukladnost</button></a>
            <a href="FUNK.APS" class="linklekcije"><button class="lekcije">Sličnost</button></a>
            <a href="SUST.LIN.JEDN" class="linklekcije"><button class="lekcije">Talesov poučak</button></a>
        </div>
        <h2>TRIONOMETRIJA PRAVOKUTNOG TROKUTA</h2>
        <div class="selekcija">
            <a href="KOOR.SUS" class="linklekcije"><button class="lekcije">Trigonometrijske funkcije šiljastog
                    kuta</button></a>
            <a href="LIN.FUN" class="linklekcije"><button class="lekcije">Računanje trigonometrijskih funkcija</button></a>
            <a href="FUNK.APS" class="linklekcije"><button class="lekcije">Primjena trigonometrijskih funkcija</button></a>
        </div>
    </div>
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1671dd2801571c4f13d09c809e95f8e3a1d41135e777ce958f3db0b0c8fce89e?" class="img1" />
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4fe9ee691cd3bdc5f5c05a514ce59741cc2f1694fbb45766931dad8d6fdb1211?" class="img2" />
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/0ceef766cb45be3f36a2c09bc6a9e955b5f79921c3925d268b63d80c0686519e?" class="img3" />
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6c3bb35c33735380c3cc635e5d376a7dffbbf4c1ed681f44d3ddeee071426d0b?" class="img4" />
    <footer>
        <p>Kontakt:&nbsp&nbsp
            jstojic@tvz.hr &nbsp&nbsp vkravaica@tvz.hr &nbsp&nbsp dvrckovi@tvz.hr</p>
    </footer>

</body>

</html>