<?php
require 'includes/view.php';
?>

<div class="intro" 
style="background-image: linear-gradient(rgba(239, 243, 240, 0), rgba(255, 255, 255, 0.3)), 
url('./img/<?php echo $subPages[$pageId]->picture; ?>.webp')"
>

    <h1><?php echo $subPages[$pageId]->title; ?></h1>

    <div class="comment">
        <p><?php echo $subPages[$pageId]->text; ?></p>
    </div>
</div>

<div class="img-gallery">
    <?php
    viewImages("../img/{$subPages[$pageId]->id}/thumbs/");
    ?>
    <script src="js/gallery.js"></script>
</div>

