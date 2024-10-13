<?php
require_once 'includes/view.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macro</title>
    <link rel="icon" href="logo/fav_fox_1.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="module" src="js/main.js"></script>
</head>

<body>

    <h-eader></h-eader>

    <main style="background-image: linear-gradient(rgba(239, 243, 240, 0.8),
    rgba(255, 255, 255, 1)), url('images/back_mac_3.webp');">

        <h2>Macro</h2>

        <div class="title">
            <p>Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet.
        </div>
    </main>
    <section id="gallery" class="wrapper-template">
        <?php
        viewImages("../images/macro/thumbs/");
        ?>
        <script src="js/gallery.js"></script>
    </section>

    <f-ooter></f-ooter>

</body>



</html>