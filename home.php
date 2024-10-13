<div class="main-intro" style="background-image: url('<?php echo $pages[$pageId]->picture;?>');">
    <h1><?php echo $pages[$pageId]->title;?></h1>
</div>

<!-- gallery menu -->
<div id="gallery">
    <?php
    foreach ($subPages as $subpage) {
        echo
        "<a href='?page={$subpage->id}' class='menu-box'>
                <img src='./img/{$subpage->picture}.jpg'>
                <h3>{$subpage->title}</h3>
            </a>";
    }
    ?>
</div>

<!-- slider -->
<h2 class="latest">Latest photo</h2>
<div class="latest-slider">
    <?php
    foreach ($sliderItems as $item) {
        echo "<div class='item' style='
            background-image: url(./img/{$item->picture});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;'>
            </div>";
    }
    ?>
    <img src="<?php echo $prevIcon->getSrc(); ?>" id="prev" style='left: 0'>
    <img src="<?php echo $nextIcon->getSrc(); ?>" id="next" style='right: 0'>
</div>

<script src="./js/slider.js"></script>