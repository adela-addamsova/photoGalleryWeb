<?php

require "./includes/db.php";
require "./includes/page-upload.php";

$pageId = "home";

if (array_key_exists("page", $_GET)) {
    if (array_key_exists($_GET["page"], $pages)) {
        $pageId = $_GET["page"];
    } else if (array_key_exists($_GET["page"], $subPages)) {
        $pageId = $_GET["page"];
    } else {
        $pageId = "404";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href=<?php echo $favIcon->getSrc(); ?> type="image/x-icon">



    <title>
        <?php
        if (isset($pages[$pageId])) {
            echo $pages[$pageId]->title;
        } else if (isset($subPages[$pageId])) {
            echo $subPages[$pageId]->title;
        }
        ?>
    </title>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <!-- Header -->
    <header>
        <div class="header-logo">
            <a href="index.php">
                <img src="<?php echo $camIcon->getSrc(); ?>" alt="logo">
            </a>
        </div>

        <div class="header-menu">
            <?php require "./components/menu.php"; ?>
        </div>

        <div class="burger-menu">
            <?php require "./components/menu.php"; ?>
        </div>

        <div class="header-social">
            <a href="#" target="_blank">
                <i class="<?php echo $igIcon->getSrc(); ?>"></i>
            </a>
            <div class="burger-menu-btn" style="background-image: <?php echo $burgerIcon->getSrc(); ?>"></div>
        </div>

    </header>


    <!-- Content -->
    <section>
        <?php
        if (isset($pages[$pageId])) {
            require("./{$pageId}.php");
        } else if (isset($subPages[$pageId])) {
            require("./gallery-page.php");
        }

        ?>
    </section>


    <!-- Footer -->
    <footer>

        <?php require "./components/menu-f.php"; ?>

        <div class="footer-social">
            <p>Copyright&copy; 2023 PhotoByJackie</p>
            <a href="https://www.instagram.com/photo_by_jackie/" target="_blank">
                <i class="<?php echo $igIcon->getSrc(); ?>"></i>
            </a>
        </div>
    </footer>

    <script src="js/burger-menu.js"></script>

</body>

</html>