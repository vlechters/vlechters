<?php
include ("logout-script.php");
?>
<html>
    <head>
        <?php
            include("connection.php");
        ?>
        <title> logout PAGE </title>
        <link rel="stylesheet" type="text/css" href="styles/vlechten.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="logout-section">
            <img class="img-logout-logo" src="img/vvv.jpg">
            <form name="logoutform" method="POST">
            <input name="logout" class="logout-submit" type="submit" value="logout">log out</button>
            </form>
        </div>
      
    </body>
</html>

