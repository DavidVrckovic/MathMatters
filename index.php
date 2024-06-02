<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "";

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
        <div class="linija"></div>
        <section class="prviSection">
            <article class="prviSectionLijevo">
                <div class="naslov0">MathMatters</div>
                <p class="paragraph1">pomoć srednjoškolcima pri učenju matematike</p>
                <p class="paragraph2">Kliknite na razred koji pohađate i pristupite lekcijama koje trenutno
                    obrađujete</p>
                <div class="naslov1">Odaberi razred</div>
                <div class="razredi">
                    <a href="lectures" class="broj">1.</a>
                    <a href="lectures" class="broj">2.</a>
                    <a href="lectures" class="broj">3.</a>
                    <a href="lectures" class="broj">4.</a>
                </div>
                <table>
                    <tr class="noBorder">
                        <td class="crtice"></td>
                        <td class="crtice"></td>
                        <td class="crtice"></td>
                        <td class="crtice"></td>
                    </tr>
                </table>
            </article>
            <article class="prviSectionDesno">
                <img src="Images/Group 106.svg">
            </article>
        </section>
        <section class="drugiSection">
            <article class="section2Lijevo">
                <img src="Images/icon _plus_v2.svg">
            </article>
            <article class="section2Desno">
                <div class="naslov2">Matura 2024!</div>
                <p class="paragraph3">
                    Pripremite se za maturu.<br />Upoznajte se s ispitnim katalogom te usavršite svoje znanje na
                    vrijeme...
                </p>
                <a class="button2">MATURA 2024</a>
                <p class="paragraph4">
                    <span>...ili pronađite</span> <a href="#" class="zadaciLink"> zadatke iz
                        prijašnjih
                        matura</href></a>
                </p>
            </article>
        </section>
        <section class="treciSection">
            <article class="section3Table">
                <table>
                    <tr>
                        <td></td>
                    <tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </article>
            <article class="section3Lijevo">
                <div class="naslov3">Registrirajte se</div>
                <label class="regHome" for="fname"><span class="rijeci">Ime</span><input type="text" id="fname" name="fname"></label>
                <label class="regHome" for="email"><span class="rijeci">E-mail</span><input class="gore" type="email" id="email" name="email"></label>
                <label class="regHome" for="pwd"><span class="rijeci">Lozinka</span><input class="gore" type="password" id="pwd" name="pwd"></label>
                <input class="dole" type="submit" value="REGISTRIRAJ SE">
                <span class="alreadyAcc">Već imate račun?<br><a href="#">Prijavi se</a></span>
            </article>
            <article class="section3Desno">
                <img src="Images/Group 100.svg">
            </article>
        </section>
    </main>

</body>

</html>