<!DOCTYPE html>



<?php
// Determine the prefix for file locations
$directory_prefix = "../";

// Include the main script
include_once($directory_prefix . "php/main.php");



// Check if a user is logged in within the session
if (isset($_SESSION["loggedin"])) {

    // Redirect a user to the account page
    header("Location: ../account");
    exit();
}
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
    <main class="auth">

        <!-- Section -->
        <section class="titles">

            <h1 class="auth_title">
                REGISTRACIJA
            </h1>

            <hr class="auth_line" id="authLine1">
            <hr class="auth_line" id="authLine2">
            <hr class="auth_line" id="authLine3">
            <hr class="auth_line" id="authLine4">

            <p class="change_auth">
                Već imate račun?
            </p>

            <a class="change_auth_link" href="../login/">
                Prijavite se
            </a>

        </section>

        <!-- Register Section -->
        <section class="form" id="register_section">

            <form action="../php/register.php" class="authenticate" id="register_form" method="POST">

                <label class="input_title" for="input_first_name">
                    Ime:
                </label>
                <input class="input_field" id="input_first_name" minlength="4" maxlength="64" name="first_name" placeholder="Upišite ime" type="text" required>

                <label class="input_title" for="input_last_name">
                    Prezime:
                </label>
                <input class="input_field" id="input_last_name" minlength="4" maxlength="64" name="last_name" placeholder="Upišite prezime" type="text" required>

                <label class="input_title" for="input_email">
                    E-adresa:
                </label>
                <input class="input_field" id="input_email" minlength="6" maxlength="255" name="email" placeholder="Upišite e-adresu" type="email" required>

                <label class="input_title" for="input_password">
                    Lozinka:
                </label>
                <input class="input_field" id="input_password" minlength="8" maxlength="255" name="password" placeholder="Upišite zaporku" type="password" required>

                <label class="input_title" for="input_repeat_password">
                    Ponoviti lozinku:
                </label>
                <input class="input_field" id="input_repeat_password" minlength="8" maxlength="255" name="repeated_password" placeholder="Ponovite zaporku" type="password" required>

                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "invalid_credentials") {
                        echo '<p class="error"> The provided credentials are incorrect. </p>';
                    }
                    if ($_GET['error'] == "passwords_no_match") {
                        echo '<p class="error"> The provided passwords do not match. </p>';
                    }
                    if ($_GET['error'] == "already_exists") {
                        echo '<p class="error"> The provided email is already taken. </p>';
                    }
                    if (isset($_SESSION['error'])) {
                        if ($_GET['error'] == "db_connection") {
                            echo '<p class="error">' . $_SESSION['error'] . '</p>';
                        }
                    }
                    if ($_GET['error'] == "register") {
                        echo '<p class="error"> An unknown error occured. Please try again. </p>';
                    }
                }
                ?>

                <button class="authenticate" id="register" type="submit">
                    Registriraj se
                </button>

                <hr class="auth_line" id="authLine1D">
                <hr class="auth_line" id="authLine2D">
                <hr class="auth_line" id="authLine3D">

            </form>

        </section>

    </main>

</body>

</html>