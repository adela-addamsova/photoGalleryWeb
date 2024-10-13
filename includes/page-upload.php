<?php

class Page
{
    public $id;
    public $title;
    public $menu;
    public $picture;
    public $text;

    function __construct($argId, $argTitulek, $argMenu, $argPicture, $argText)
    {
        $this->id = $argId;
        $this->title = $argTitulek;
        $this->menu = $argMenu;
        $this->picture = $argPicture;
        $this->text = $argText;
    }
} // endPage

// Submenu
$subPages = array(
    "macro" => new Page("macro", "Macro", "Macro", "back_mac_3", "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."),
    "landscape" => new Page(
        "landscape",
        "Landscape",
        "Landscape",
        "background",
        "Photography of the landscape<br>
                I make particularly on my travels. <br>
                So far I visited Italy, Austria, <br>
                Hungary, Ireland, and Scandinavia. <br>
                Most of the photos are still from<br>
                my native country Czech republic."
    ),
    "animals" => new Page(
        "animals",
        "Animals",
        "Animals",
        "IMG_3601",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    ),
    "technology" => new Page(
        "technology",
        "Technology",
        "Technology",
        "img22",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    ),
    "architecture" => new Page(
        "architecture",
        "Architecture",
        "Architecture",
        "img19",
        "Lorem ipsum dolor sit amet, <br>
                consectetuer adipiscing elit. <br>
                Etiam commodo dui eget wisi. <br>
                In enim a arcu imperdiet malesuada. <br>
                Nulla turpis magna, cursus sit amet."
    )
);

// Main menu
$pages = array(
    "home" => new Page("home", "Photo by Jackie", "Home", "./img/img1_back.jpg", ""),
    "gallery" => $subPages,
    "about" => new Page("about", "About", "About", "", ""),
    "404" => new Page("404", "Page doesn't exist", "404", "", "")
);



// TODO - extend subpages categories
class SliderItem
{
    public $id;
    public $picture;

    function __construct($argId, $argPicture)
    {
        $this->id = $argId;
        $this->picture = $argPicture;
    }

    function getImgUrl()
    {
        return $this->picture;
    }
} //endSlider

$sliderItems = array(
    $macroSlider = new SliderItem("macro", "back_mac_3.jpg"),
    $landscapeSlider = new SliderItem("landscape", "background.jpg"),
    $animalsSlider = new SliderItem("animals", "IMG_3601.jpg"),
    $technologyeSlider = new SliderItem("technology", "img22.jpg"),
    $architectureSlider = new SliderItem("architecture", "img19.jpg")
);



class Icon
{
    public $src;

    function __construct($argSrc)
    {
        $this->src = $argSrc;
    }

    function getSrc()
    {
        return $this->src;
    }
} // endIkony

$icons = array(
    $favIcon = new Icon("img/icons/fav_fox.png"),
    $igIcon = new Icon("fa-brands fa-instagram"),
    $camIcon = new Icon("./img/icons/camera_icon.png"),
    $prevIcon = new Icon("img/icons/back.png"),
    $nextIcon = new Icon("img/icons/next.png"),
    $burgerIcon = new Icon("url(./img/icons/menu-burger.png), url(./img/icons/cross.png)")
);

