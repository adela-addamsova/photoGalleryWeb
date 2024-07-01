<?php

declare(strict_types=1);

$dsn = "mysql:host=localhost;dbname=web";
// data source name
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // connect database with php data object
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // while error - exception
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
    // if connection fails grab error message
}



function viewImagesMacro()
{
    // open this directory 
    $myDirectory = opendir("images/macro/thumbs/");

    // get each entry
    while ($image = readdir($myDirectory)) {
        $dirArray[] = $image;
    }

    //	count elements in array
    $indexCount = count($dirArray);

    // order
    natsort($dirArray);

    // loop through the array of files and print them all in a list
    for ($index = 0; $index < $indexCount; $index++) {
        $extension = substr($dirArray[$index], -3);
        if ($extension == 'jpg') { // list only jpgs
            echo '<img class = "gallery-img" src="images/macro/thumbs/' . $dirArray[$index] . '" alt="Image" />';
        }
    }

     // close directory
     closedir($myDirectory);
}



function viewImagesLandscape()
{
    $myDirectory = opendir("images/landscape/thumbs/");

    while ($image = readdir($myDirectory)) {
        $dirArray[] = $image;
    }

    $indexCount = count($dirArray);

    natsort($dirArray);

    for ($index = 0; $index < $indexCount; $index++) {
        $extension = substr($dirArray[$index], -3);
        if ($extension == 'jpg') { // list only jpgs
            echo '<img class = "gallery-img" src="images/landscape/thumbs/' . $dirArray[$index] . '" alt="Image" />';
        }
    }

     closedir($myDirectory);
}