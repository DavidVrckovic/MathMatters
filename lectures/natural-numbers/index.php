<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../../";

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
    <title> MathMatters | Prirodni brojevi </title>
    <link href="<?php echo ($directory_prefix . 'Images/logo.png'); ?>" rel="icon" type="image/png">

    <!-- CSS files & JS scripts -->
    <link href="prirbrojevi.css" rel="stylesheet" type="text/css">
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

    $xml = simplexml_load_file("../../content.xml") or die("Error: Cannot create object.");
    ?>

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

    <div class="clearfix">
        <section class="ime">
            <h3>MathMatters</h3> <br>
            <h4><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='1']/artikl")[0]?></h4>
        </section>
        <section class="container">
            <div class="box1_1">
                <h1><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='2']/artikl")[0]?></h1> <br>
                <h2><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='2']/artikl")[1]?></h2>
                <p>
                <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='2']/artikl")[2]?>
                </p>
                <button class="formula"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='2']/artikl")[3]?></button>
            </div>
            <div class="box2">
                <img class="god" src="../../Images/file.png"> <br>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='2']/artikl")[4]?>
            </div>

        </section>

        <section class="container2">
            <div class="box1_1">
                <h2><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='3']/artikl")[0]?></h2>
                <p>
                <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='3']/artikl")[1]?>
                </p>
                <button class="formula"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='3']/artikl")[2]?></button>
            </div>
            <div class="box3">
                <div class="numb">1</div>
                <div class="numb">0</div>
                <div class="numb">-1</div><br>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='3']/artikl")[3]?></p>

            </div>

        </section>
        <section class="container2">
            <div class="box1_1">
                <h2><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='4']/artikl")[0]?></h2>
                <p>
                <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='4']/artikl")[1]?>
                </p>
                <button class="formula"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='4']/artikl")[2]?></button>
            </div>
            <div class="box2">
                <img class="trts" src="../../Images/torta.png">
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='4']/artikl")[3]?></p>
            </div>

        </section>

        <section class="container5">
            <div class="box1_2">
                <h2 class="pnp"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='5']/artikl")[0]?></h2>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='5']/artikl")[1]?></p><br>
                <div class="n"><em class="p"> 10 : 2 = 5 </em> &nbsp&nbsp&nbsp > <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='5']/artikl")[2]?></div>
                <div class="n"><em class="p"> 5 : 2 =2.5 </em> &nbsp&nbsp > <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='5']/artikl")[3]?></div>
            </div>

            <div class="box1_2">
                <h2 class="pnp"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='6']/artikl")[0]?></h2>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='6']/artikl")[1]?></p><br>
                <div class="n"><em class="p">2 </em> <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='6']/artikl")[2]?> </div>
                <div class="n"><em class="p">4 </em> <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='6']/artikl")[3]?></div>
                <div class="n"><em class="jedan"> 1 </em> <?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='6']/artikl")[4]?></div>
            </div>

            <div class="box1_2">
                <h2 class="pnp"><em><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[0]?></em></h2>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[1]?></p>
                <div class="nm"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[2]?></div><br>
                <div class="n"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[3]?></div><br>
                <div class="n"><img src="../../Images/Group 117.svg"></div>
            </div><br>
            <div class="box1_2">
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[4]?></p>
                <div class="n"><img src="../../Images/Group 118.svg"></div>
            </div><br>
            <div class="box1_2">
                <div class="nm"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[5]?></div><br>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[6]?></p>
                <div class="n"><img src="../../Images/Group 119.svg"></div>
            </div><br>
            <div class="box1_2">
                <p class="nzd"><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[7]?></p><br>
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[8]?></p>
                <div class="n"><img src="../../Images/Group 114.svg"></div>
            </div><br>
            <div class="box1_2">
                <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/sekcija[@id='7']/artikl")[9]?></p>
                <div class="n"><img src="../../Images/Group 116.svg"></div>
            </div>
        </section>
        <footer>
            <p><?php echo $xml->xpath("//cijeliBrojevi[@lang='$lang']/futer[@id='1']/kontakt")[0]?></p>
        </footer>

</body>

</html>