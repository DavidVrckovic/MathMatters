<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
    .box {
        width: 100%;
        max-width: 400px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 16px;
        margin: 0 auto;
    }
</style>

<body>


    <?php
    require_once '../google-api-php-client--PHP8.0/vendor/autoload.php';

    // Create Client Request to access Google API
    $client = new Google\Client();
    $client->setAuthConfig('../Protected/google_social_login_config.json');
    $client->addScope("email", "profile");

    // Authenticate code from Google OAuth Flow
    if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token);

        /* get profile info
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $email =  $google_account_info->email;
        $name =  $google_account_info->name;
        */

        if ($client->getAccessToken()) {
            $token_data = $client->verifyIdToken();
        }
    ?>


        <pre>
            <?php if (isset($token_data)) {
                var_export($token_data);
            }
            ?>
        </pre>


    <?php } else { ?>
        <div class="container">

            <div class="table-responsive">

                <h3>Login using Google with PHP</h3>
                <div class="box">

                    <div class="form-group">
                        <label for="email">Emailid</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="pwd" id="pwd" placeholder="Enter Password" class="form-control" />
                    </div>

                    <div class="form-group">
                        <input type="submit" id="login" name="login" value="Login" class="btn btn-success form-control" />
                        <hr>
                        <a href="<?php echo $client->createAuthUrl() ?>"><img src="../Images/google-signin.png" width="256"></a>
                    </div>

                    <div class="data">
                        <p>Here is the data from your Id Token:</p>
                    </div>

                </div>

            </div>

        </div>

    <?php } ?>


</body>

</html>