<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "";

// Include the main script
include_once($directory_prefix . "php/main.php");
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
    <title> MathMatters </title>
    <link href="<?php echo ($directory_prefix . 'Images/logo.png'); ?>" rel="icon" type="image/png">

    <!-- CSS files & JS scripts -->
    <link href="<?php echo ($directory_prefix . 'Styles/index.css'); ?>" rel="stylesheet" type="text/css">
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
            <a class="nav_link" href="<?php echo ($directory_prefix . ''); ?>" id="home_link" style="background-color: #011F1F; color: white;">

                <!-- Navigation link icon -->
                <i class="fa-solid fa-house" id="home_icon" style="background-color: #011F1F; color: white;"></i>

            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'classes'); ?>">
                Razredi
            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'lectures'); ?>">
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



    <!-- MAIN -->
    <main>
        <section class="prviSection">
            <article class="prviSectionLijevo">
                <div class="naslov0">MathMatters</div>
                <p class="paragraph1">pomoć srednjoškolcima pri učenju matematike</p>
                <div class="naslov1">Odaberi razred</div>
                <p class="paragraph2">Kliknite na razred koji pohađate i pristupite lekcijama koje trenutno
                    obrađujete</p>
                <div class="razredi">
                    <button id="#" class="broj">1.</button>
                    <button id="#" class="broj">2.</button>
                    <button id="#" class="broj">3.</button>
                    <button id="#" class="broj">4.</button>
                </div>
            </article>
            <article class="prviSectionSredina">
                <div class="ili">ili</div>
            </article>
            <article class="prviSectionDesno">
                <button id="#" class="ellipse">Pretraži Gradivo</button>
            </article>
        </section>
        <section class="drugiSection">
            <div class="text-wrapper-8">MATURA 2024</div>
            <div class="text-wrapper-14">Matura 2024!</div>
            <p class="pripremite-se-za">
                Pripremite se za maturu.<br />Upoznajte se s ispitnim katalogom te usavršite svoje znanje na
                vrijeme...
            </p>
            <p class="ili-prona-ite">
                <span class="span">...ili pronađite</span> <a href="#" class="text-wrapper-6"> zadatke iz
                    prijašnjih
                    matura</href></a>
            </p>
            <div class="text-wrapper-16">Registrirajte se</div>
            <div class="rectangle-4"></div>
            <div class="rectangle-5"></div>
            <div class="text-wrapper-17">Ime</div>
            <div class="rectangle-6"></div>
            <div class="text-wrapper-18">E-mail</div>
            <div class="rectangle-7"></div>
            <div class="text-wrapper-19">Lozinka</div>
            <button class="text-wrapper-20">PRIJAVI SE</button>
            </div>
            </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
    </footer>

</body>

</html>