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

    $xml = simplexml_load_file("content.xml") or die("Error: Cannot create object.");
    ?>

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



    <!-- MAIN -->
    <main>
        <div class="linija"></div>
        <section class="prviSection">
            <article class="prviSectionLijevo">
                <div class="naslov0">MathMatters</div>
                <p class="paragraph1"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='1']/artikl")[0] ?></p>
                <p class="paragraph2"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='1']/artikl")[1] ?></p>
                <div class="naslov1"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='1']/artikl")[2] ?></div>
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
                <div class="naslov2"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='2']/artikl")[0] ?></div>
                <p class="paragraph3">
                <?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='2']/artikl")[1] ?>
                </p>
                <a class="button2"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='2']/artikl")[2] ?></a>
                <p class="paragraph4">
                <?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='2']/artikl")[3] ?>
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
                <div class="naslov3"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[0] ?></div>
                <label class="regHome" for="fname"><span class="rijeci"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[1] ?></span><input type="text" id="fname" name="fname"></label>
                <label class="regHome" for="email"><span class="rijeci"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[2] ?></span><input class="gore" type="email" id="email" name="email"></label>
                <label class="regHome" for="pwd"><span class="rijeci"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[3] ?></span><input class="gore" type="password" id="pwd" name="pwd"></label>
                <input class="dole" type="submit" value="<?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[4] ?>">
                <span class="alreadyAcc"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[5] ?><br>
                <a href="#"><?php echo $xml->xpath("//Početna[@lang='$lang']/sekcija[@id='3']/artikl")[6] ?></a></span>
            </article>
            <article class="section3Desno">
                <img src="Images/Group 100.svg">
            </article>
        </section>
    </main>

    <!-- JS scripts -->
    <script src="<?php echo ($directory_prefix . 'Scripts/main.js'); ?>"></script>
</body>

</html>