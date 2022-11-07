<?php
include ('config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <title>Techies</title>
        <link rel="stylesheet" type="text/css" href="css/index_style.css">
    </head>

    <body>
        <!-- header section starts  -->
        <header>
            <div class="header-1">
                <a href="#" class="logo"><i class="fas fa-mobile-screen"></i>Techies</a>
                <form action="" class="search-box-container">
                    <input type="search" id="search-box" placeholder="search here...">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
            </div>

            <div class="header-2">
                <div id="menu-bar" class="fas fa-bars"></div>
                <nav class="icons">
                    <a href="login_form.php" class="fas fa-user-circle"></a>
                </nav>
            </div>
        </header>
        <!-- header section ends -->
    </body>

</html>