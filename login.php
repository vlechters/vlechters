<?php
include ("login-script.php");
?>
<html>
    <head>
        <?php
            include("connection.php");
        ?>
        <title> LOGIN PAGE </title>
        <link rel="stylesheet" type="text/css" href="styles/vlechten.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="login-section">
            <img class="img-login-logo" src="img/vvv.jpg">
            <form name="loginform" method="POST">
            <input class="username-login" name="username" type="text" placeholder="gebruikersnaam"><br/><br/>
            <input class="password-login" name="password" type="password" placeholder="wachtwoord"><br/><br/>
            <input class="login-submit" type="submit" name="loginform" value="login">log in</button>
            </form>
        </div>
    </body>
</html>

