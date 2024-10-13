<?php

function viewImages($dirPath)
{
    $dir = __DIR__ . DIRECTORY_SEPARATOR . $dirPath;
    $images = glob("$dir*.webp", GLOB_BRACE);
    natsort($images);

    foreach ($images as $i) {
        echo "<img id='imgs' src='http://localhost/photoGalleryWeb/img/" . $dirPath . rawurlencode(basename($i)) . "'>";
    }
}