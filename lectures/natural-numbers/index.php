<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../../";

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
        <section class="ime">
            <h3>MathMatters</h3> <br>
            <h4>Realni brojevi > Prirodni, cijeli i racionalni brojevi</h4>
        </section>
        <section class="container">
            <div class="box1_1">
                <h1>PRIRODNI,CIJELI I RACIONALNI BROJEVI</h1> <br>
                <h2>PRIRODNI BROJEVI</h2>
                <p>
                    Prirodni brojevi su oni koji kreću od 1 u pozitivnu beskonačnost dakle 1, 2,3,4...Zajedno čine skup N.
                    Ako želimo reći da je broj 10 dio skupa N ovako ćemo to zapisati: 10 E N.
                </p>
                <button class="formula">N = {0,1,2,3,4...besk}</button>
            </div>
            <div class="box2">
                <img class="god" src="../../Images/file.png"> <br>
                <p><em>Slika 1.</em> Brojenjem godova na panju određujemo broj godina drveta</p>
            </div>

        </section>

        <section class="container2">
            <div class="box1_1">
                <h2>CIJELI BROJEVI</h2>
                <p>
                    Cijeli brojevi su svi prirodni brojevi, nula i svi prirodni brojevi s minusom ispred.Zajedno čine skup Z.
                </p>
                <button class="formula">Z = {-2,-1,0,1,2,3,...besk}</button>
            </div>
            <div class="box3">
                <div class="numb">1</div>
                <div class="numb">0</div>
                <div class="numb">-1</div><br>
                <p><em>Slika 2. </em> Cijeli se brojevi koriste za označavanje katova najčešće u garažama.</p>

            </div>

        </section>
        <section class="container2">
            <div class="box1_1">
                <h2>RACIONALNI BROJEVI</h2>
                <p>
                    RACIONALNI BROJ je broj koji se može zapisati u obliku razlomka kojemu je brojnik cijeli, a nazivnik prirodni broj.
                </p>
                <button class="formula">Q = {-1/2,-0.3,0,1/7,2,...besk}</button>
            </div>
            <div class="box2">
                <img class="trts" src="../../Images/torta.png">
                <p><em>Slika 3. </em> Racionalni brojevi mogu se korisiti u svrhu podjele torte na jednake komade.</p>
            </div>

        </section>

        <section class="container5">
            <div class="box1_2">
                <h2 class="pnp">Parni i neparni brojevi</h2>
                <p>Parni brojevi su oni koji su djeljivi s brojem 2 bez ostatka, a neparni su svi koji nisu</p><br>
                <div class="n"><em class="p"> 10 : 2 = 5 </em> &nbsp&nbsp&nbsp > PARAN</div>
                <div class="n"><em class="p"> 5 : 2 =2.5 </em> &nbsp&nbsp > NEPARAN</div>
            </div>

            <div class="box1_2">
                <h2 class="pnp">Prosti i složeni brojevi</h2>
                <p>Prosti broj je onaj koji ima 2 djeljitelja, a složeni onaj koji ima više od 2</p><br>
                <div class="n"><em class="p">2 </em> je djeljiv 1 i 2 tako da je PROST </div>
                <div class="n"><em class="p">4 </em> je djeljiv 4, 2, 1 tako da je SLOŽEN</div>
                <div class="n"><em class="jedan"> 1 </em>&nbsp je djeljiv SAMO S 1 tako da je NIJE NI PROST NI SLOŽEN</div>
            </div>

            <div class="box1_2">
                <h2 class="pnp"><em>DODATNI MATERIJAL</em></h2>
                <p>Najveći zajednički djelitelj (NZD) i Najmanji zajednički višekratnik (NZV): Ovi koncepti su ključni u teoriji brojeva.
                    NZD je najveći broj s kojim se 2 broja mogu dijeliti, dok je NZV najmanji broj koji je višekratnik oba broja.</p><br>
                <p class="nzd">Najveći zajednički djelitelj </p>
                <div class="nm">1.način </div><br>
                <div class="n">Želimo naći najveći zajednički djelitelj brojeva 48 i 72.Prvo rastavimo brojeve na proste faktore.</div><br>
                <div class="n"><img src="../../Images/Group 117.svg"></div>
            </div><br>
            <div class="box1_2">
                <p>Označene dijelovi predstavljaju proste faktore koji su zajednički brojevima.
                    <br>
                    Umnožak tih faktora je njihov najveći zajednički djelitelj
                </p>
                <div class="n"><img src="../../Images/Group 118.svg"></div>
            </div><br>
            <div class="box1_2">
                <div class="nm">2.način </div><br>
                <p>Djelitelja možemo pronaći i na brži način djeljenjem brojeva na proste faktore istovremeno.</p>
                <div class="n"><img src="../../Images/Group 119.svg"></div>
            </div><br>
            <div class="box1_2">
                <p class="nzd">Najmanji zajednički višekratnik </p><br>
                <p>NZV određujemo tako da za svaki od faktora iz prošlog primjera pogledamo koliko se puta ponavljaju pri rastavu brojeva.
                    Onoliko puta koliko se najviše ponavlja će se koristiti kao faktor u zajedničkom višekratniku.</p>
                <div class="n"><img src="../../Images/Group 114.svg"></div>
            </div><br>
            <div class="box1_2">
                <p>U ovome slučaju broj 2 se pojavljuje najviše četiri puta, a broj 3 dva puta, a najmanji zajednički višekratnik je
                    umnožak tih brojeva. </p>
                <div class="n"><img src="../../Images/Group 116.svg"></div>
            </div>
        </section>
        <footer>
            <p>Kontakt:&nbsp&nbsp
                jstojic@tvz.hr &nbsp&nbsp vkravaica@tvz.hr &nbsp&nbsp dvrckovi@tvz.hr</p>
        </footer>

</body>

</html>