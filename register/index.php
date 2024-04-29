<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

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
    <title> MathMatters | Register </title>
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
            <a class="nav_link" href="<?php echo ($directory_prefix . ''); ?>" id="home_link">

                <!-- Navigation link icon -->
                <i class="fa-solid fa-house" id="home_icon"></i>

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

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'login'); ?>">
                Prijavi se
            </a>

            <!-- Navigation link -->
            <a class="nav_link" href="<?php echo ($directory_prefix . 'register'); ?>" style="background-color: #011F1F; color: white;">
                Već imate račun?
            </a>

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

        <!-- Section -->
        <section class="small has_bg_img" id="auth_section">

            <img alt="Section background image" class="small" id="auth_section_img" src="../images/coins7.jpg" />

            <div class="inner has_text" id="auth_inner">

                <h1 class="title">
                    Autentifikacija
                </h1>

            </div>

        </section>

        <!-- Register Section -->
        <section class="form" id="register_section">

            <form action="../php/register.php" class="authenticate" id="register_form" method="POST">

                <h1 class="title">
                    Registracija
                </h1>

                <p class="description">
                    Molim vas ispunite podatke dolje kako biste registrirali svoj račun.
                </p>

                <hr>

                <label class="input_title" for="input_username">
                    Korisničko ime
                </label>
                <input class="input_field" id="input_username" name="username" placeholder="Enter a username" type="text" required>

                <label class="input_title" for="input_email">
                    E-adresa
                </label>
                <input class="input_field" id="input_email" name="email" placeholder="Enter an email" type="email" required>

                <label class="input_title" for="input_password">
                    Lozinka
                </label>
                <input class="input_field" id="input_password" name="password" placeholder="Enter a password" type="password" required>

                <label class="input_title" for="input_repeat_password">
                    Ponoviti lozinku
                </label>
                <input class="input_field" id="input_repeat_password" name="repeated_password" placeholder="Repeat a password" type="password" required>

                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "invalid_credentials") {
                        echo '<p class="invalid_credentials" style="color: red;"> The provided credentials are incorrect. </p>';
                    }
                    if ($_GET['error'] == "already_exists") {
                        echo '<p class="already_exists" style="color: red;"> The provided username or email is already registered. </p>';
                    }
                    if ($_GET['error'] == "unknown_username") {
                        echo '<p class="register" style="color: red;"> There was an error with your registration. Please try again. </p>';
                    }
                    if (isset($_SESSION['error'])) {
                        if ($_GET['error'] == "mysql_connection") {
                            echo '<p class="mysql_connection" style="color: red;">' . $_SESSION['error'] . '</p>';
                        }
                    }
                }
                ?>

                <button class="authenticate" id="register" type="submit">
                    Registriraj se
                </button>

                <br>

                <a class="authenticate_other" href="../login">
                    Ipak se prijavi
                </a>
                <a href="#login"></a>

            </form>

        </section>

    </main>

</body>

</html>