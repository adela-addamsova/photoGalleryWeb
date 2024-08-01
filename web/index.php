<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo by Jackie</title>
    <link rel="icon" href="logo/fav_fox_1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="module" src="js/main.js"></script>
</head>

<body>

    <h-eader></h-eader>

    <div class="main-intro">
        <h1>PHOTO BY JACKIE</h1>
    </div>
    <!-- Main -->
    <main>

        <!-- Category section -->
        <!--  <container id="category">
            <a href="landscape.php" class="category-box" id="b1">
                <div class="dark-overlay"><h3>Landscape</h3></div>
            </a>
            <a href="macro.php" class="category-box" id="b2">
                <div class="dark-overlay"><h3>Macro</h3></div>
                
            </a>
            <a href="#" class="category-box" id="b3">
                <div class="dark-overlay"><h3>Animals</h3></div>
                
            </a>
            <a href="#" class="category-box" id="b4">
                <div class="dark-overlay"><h3>Technology</h3></div>
                
            </a>
            <a href="#category" class="category-box" id="b5">
                <div class="dark-overlay"><h3>Architecture</h3></div>
                
            </a>
            <a href="#" class="category-box" id="b6">
                <div class="dark-overlay"><h3>Other</h3></div>
                
            </a>
        </container> -->
        <container class="around">
            <container id="gallery">
                <a href="landscape.php" class="menu-box" id="box1">
                    <img src="images/background.jpg" alt="">
                    <h2>Landscape</h2>
                </a>
                <a href="macro.php" class="menu-box" id="2">
                    <h2>Macro</h2>
                    <img src="images/back_mac_3.jpg" alt="">
                </a>
                <a href="#" class="menu-box" id="3">
                    <img src="images/IMG_3601.jpg" alt="">
                    <h2>Animals</h2>
                </a>
                <a href="#" class="menu-box" id="4">
                    <h2>Technology</h2>
                    <img src="images/img22.jpg" alt="">
                </a>
                <a href="#" class="menu-box" id="5">
                    <img src="images/img19.jpg" alt="">
                    <h2>Architecture</h2>
                </a>



            </container>
        </container>
    </main>

    
    <h2 id="latest" class="wrapper-template">Latest photo</h2>
    <section class="slider-box">
        <div class="slider">
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <button id="next">></button>
            <button id="prev"><</button>
        </div>

        <script src="js/banner.js"></script>
    </section>

    <f-ooter></f-ooter>

</body>


</html>