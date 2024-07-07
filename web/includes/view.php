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



function viewImages($dirPAth)
{
  //  $myDirectory = opendir($dirPAth);
    $dirArray = [];
    $cnt = 0;

    if ($myDirectory = opendir($dirPAth)) {
        while (false !== ($image = readdir($myDirectory))) {
            if ($image != "." && $image != "..") {
                $dirArray[$cnt] = $image;
                $cnt++;
            }
        }
    }

    // while (false !== ($image = readdir($myDirectory))) {

    //     $dirArray[$cnt] = $image;
    //     $cnt++;
    // }

    //sort($dirArray,SORT_NATURAL);
     natsort($dirArray);
    // print_r($dirArray);


    $indexCount = count($dirArray);
    

    foreach($dirArray as $image) {
    
        echo '<img class = "gallery-img" src="' . $dirPAth . $image . '" alt="Image" />';
    }

    // print_r($dirArray);

    // for ($index = 0; $index < $indexCount; $index++) {
    //     $extension = substr($dirArray[$index], -3);
    //     if ($extension == 'jpg') { // list only jpgs
    //         echo '<img class = "gallery-img" src="' . $dirPAth . $dirArray[$index] . '" alt="Image" />';
    //     }
    // }

    // sort($files,SORT_NATURAL);
    // natsort($dirArray);
    // sort($dirArray,SORT_NATURAL)




     closedir($myDirectory);
}
