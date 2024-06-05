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

        <!-- XML content -->
        <?php
    if (isset($_GET["lang"])) {
        setcookie("language", $_GET["lang"], time() + 60 * 60 * 24 * 365, "/");
        header("Location: index.php");
    }

    if (isset($_COOKIE["language"]) && $_COOKIE["language"] == "en") {
        $lang = "en";
        $lang_change = "hr";
    } else {
        $lang = "hr";
        $lang_change = "en";
    }

    $xml = simplexml_load_file("../content.xml") or die("Error: Cannot create object.");
    ?>

    <!-- JS scripts -->

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
                <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[1] ?>
            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'lectures'); ?>">
                <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[2] ?>
            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'matura'); ?>">
                <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[3] ?>
            </a>

            <!-- Navigation dialog -->
            <dialog class="menu" id="nav_menu_dialog">

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . ''); ?>">
                    <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[0] ?>
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'classes'); ?>">
                    <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[1] ?>
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'lectures'); ?>">
                    <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[2] ?>
                </a>

                <!-- Navigation link -->
                <a class="dropdown_link" href="<?php echo ($directory_prefix . 'matura'); ?>">
                    <?php echo $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[3] ?>
                </a>

            </dialog>

        </nav>

        <!-- Right Navigation -->
        <nav class="options" id="nav_options">

            <?php
            // <a class="nav_lang" href=""><img src="../Images/hren.svg"></a>
            echo ('
                <a class="nav_link" href="?lang=' . $lang_change . '">
                    ' . strtoupper($lang) . '
                </a>
            ');
            ?>

            <?php
            if (!isset($_SESSION["loggedin"])) {
                echo ('
                    <a class="nav_link" href="' . $directory_prefix . 'login">
                        ' . $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[4] . '
                    </a>

                    <a class="nav_link" href="' . $directory_prefix . 'register">
                        ' . $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[5] . '
                    </a>
                ');
            } else {
                echo ('
                    <a class="nav_link" href="' . $directory_prefix . 'account">
                        ' . $xml->xpath("//Navigacija[@lang='$lang']/NavLink")[6] . '
                    </a>
                ');
            }
            ?>
        </nav>

    </header>


    <section class="clearfix">
        <h1>MathMatters</h1>
        <h3> <?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='1']/artikl")[0]?> </h3>
    </section>
    <section class="gllekcije">
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[0]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="natural-numbers" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[1]?></a>
                <a href="REALNI" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[2]?></a>
                <a href="INTER" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[3]?></a>
                <a href="OPER.REAL" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[4]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[5]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="POZ.EKSP" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[6]?></a>
                <a href="POT.NEG" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[7]?></a>
                <a href="ZNAN.ZAPIS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[8]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[9]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="MONIPOL" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[10]?></a>
                <a href="MNOŽ.POL" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[11]?></a>
                <a href="VR.ALG" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[12]?></a>
                <a href="FAKT" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[13]?></a>
                <a href="ALG.RAZL" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[14]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[15]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="JEDNA" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[16]?></a>
                <a href="JEAPS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[17]?></a>
                <a href="JDVIJE" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[18]?></a>
                <a href="PRIMJ.JEDN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[19]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[20]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="NEJJEDNA" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[21]?></a>
                <a href="SUST.JEDN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[22]?></a>
                <a href="SLOŽ.NEJ" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[23]?></a>
                <a href="NEJAPS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[24]?></a>
                <a href="PRIMJ.NEJ" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[25]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[26]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[27]?></a>
                <a href="LIN.FUN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[28]?></a>
                <a href="FUNK.APS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[29]?></a>
                <a href="SUST.LIN.JEDN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[30]?></a>
                <a href="PRIM.SUS.LIN.JEDN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[31]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[32]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[33]?></a>
                <a href="LIN.FUN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[34]?></a>
                <a href="FUNK.APS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[35]?></a>
                <a href="SUST.LIN.JEDN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[36]?></a>
            </div>
        </article>
        <article>
            <div class="gradiva">
                <h2><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[37]?></h2>
            </div>
            <div class="lekcije" style="display: none;">
                <a href="KOOR.SUS" class="cjeline">T<?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[38]?></a>
                <a href="LIN.FUN" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[39]?></a>
                <a href="FUNK.APS" class="cjeline"><?php echo $xml->xpath("//Materials[@lang='$lang']/sekcija[@id='2']/artikl")[40]?></a>
            </div>
        </article>
    </section>
    <footer>
        <p><?php echo $xml->xpath("//Materials[@lang='$lang']/futer[@id='1']/kontakt")[0]?></p>
    </footer>
    <script src="<?php echo ($directory_prefix . 'Scripts/main.js'); ?>"></script>
</body>

</html>