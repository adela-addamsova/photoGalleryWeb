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

    <!-- Main -->
    <main>
        <div class="main-intro">
            <h1>Photo <br> by <br> Jackie</h1>
        </div>
        <!-- Category section -->
        <container id="category">
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