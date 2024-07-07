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
    <link rel="stylesheet" href="css/macro.css">
    <script type="module" src="js/main.js"></script>
</head>

<body>

    <h-eader></h-eader>

    <body>
        <main>
            <h2>Macro</h2>

            <div class="title">
                <p>Lorem ipsum dolor sit amet, <br>
                    consectetuer adipiscing elit. <br>
                    Etiam commodo dui eget wisi. <br>
                    In enim a arcu imperdiet malesuada. <br>
                    Nulla turpis magna, cursus sit amet.
            </div>
        </main>
        <section id="index-gallery" class="wrapper-template">
            <?php
            viewImages("images/macro/thumbs/");
            ?>

        <!-- Works with gallery.js
             <section id="index-gallery" class="wrapper-template">
                <div class="gallery-img img1">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img2">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img3">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img4">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img5">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img6">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img7">
                    <div><a href="#"></a></div>
                </div>  
                <div class="gallery-img img8">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img9">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img10">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img11">
                    <div><a href="#"></a></div>
                </div>
                <div class="gallery-img img12">
                    <div><a href="#"></a></div>
                </div>
    </section>
    -->
            <script src="js/gallery.js"></script>
        </section>


        <f-ooter></f-ooter>

    </body>


</html>