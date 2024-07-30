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
        <section id="gallery" class="wrapper-template">
            <?php
            // get images in gallery folder
            $dirPath = "images/macro/thumbs/";
            $dir = __DIR__ . DIRECTORY_SEPARATOR . $dirPath;
            $images = glob("$dir*.jpg", GLOB_BRACE);
            natsort($images);


            // output images
            foreach ($images as $i) {
                echo "<img id='imgs' src='images/macro/thumbs/" . rawurlencode(basename($i)) . "'>";
            }
            ?>


        <script>
                
                
                // window.addEventListener("load", () => {
                //     //get all images

                //     var galleryImages = document.querySelectorAll("#gallery img");
                //      // click on image fullscreen
                //      if (galleryImages.length > 0) {
                //         for (let img of galleryImages) {
                //             img.onclick = () => img.classList.toggle("full");
                //         }
                //     }
                //     });



                let galleryImages = document.querySelectorAll("#gallery img");
                let getLatestOpenedImg;
                let windowWidth = window.innerWidth;

                if (galleryImages) {
                    galleryImages.forEach(function(image,index) {
                        image.onclick = function()
                         {
                         let getFullImgUrl = image.src;
                       // alert(getFullImgUrl);
                       let getImgUrlPos = getFullImgUrl.split("/images/macro/thumbs/");
            
                        let setNewImgUrl = getImgUrlPos[1].replace('")', '');
                     //  alert(setNewImgUrl);
                       

                        getLatestOpenedImg = index + 1;

                        // create div for popup img
                        let container = document.body;  
                        let newImgWindow = document.createElement("div");
                            // append container to the body
                        container.appendChild(newImgWindow);
                            // set attributes to div
                        newImgWindow.setAttribute("class", "img-window");
                       // newImgWindow.setAttribute("onclick", "closeImg()");

                        // insert img in the container
                        let newImg = document.createElement("img");
                        newImgWindow.appendChild(newImg);
                        newImg.setAttribute("src", "http://localhost/photoGalleryWeb/web/images/macro/" + setNewImgUrl);
                        newImg.setAttribute("id", "current-img");
                        
                        // buttons
                        let newPrevBtn = document.createElement("a");
                        let btnPrevImg = document.createElement("img");
                        btnPrevImg.setAttribute("src", "logo/angle_left.png");
                        newPrevBtn.appendChild(btnPrevImg);
                        container.appendChild(newPrevBtn);
                        newPrevBtn.setAttribute("class", "img-btn-prev");
                        newPrevBtn.setAttribute("onclick", "changeImg(0)");
                        
                        let newNextBtn = document.createElement("a");
                        let btnNextImg = document.createElement("img");
                        btnNextImg.setAttribute("src", "logo/angle_right.png");
                        newNextBtn.appendChild(btnNextImg);
                        container.appendChild(newNextBtn);
                        newNextBtn.setAttribute("class", "img-btn-next");
                        newNextBtn.setAttribute("onclick", "changeImg(1)");

                        let newCloseBtn = document.createElement("a");
                        let btnCloseImg = document.createElement("img");
                        btnCloseImg.setAttribute("src", "logo/x-mark.png");
                        newCloseBtn.appendChild(btnCloseImg);
                        container.appendChild(newCloseBtn);
                        newCloseBtn.setAttribute("class", "img-btn-close");
                        newCloseBtn.setAttribute("onclick", "closeImg()");
                        
                        
                        }
                    });
                }

            function closeImg() {
                document.querySelector(".img-window").remove();
                document.querySelector(".img-btn-next").remove();
                document.querySelector(".img-btn-prev").remove();
                document.querySelector(".img-btn-close").remove();
    
            }

            function changeImg(changeDir) {
                // remove current img
                document.querySelector("#current-img").remove();
                // get container
                let getImgWindow = document.querySelector(".img-window");
                // get new img
                let newImg = document.createElement("img");
                getImgWindow.appendChild(newImg);

                let calcNewImg;
                if(changeDir === 1) {
                    calcNewImg = getLatestOpenedImg + 1;
                    if(calcNewImg > galleryImages.length) {
                        calcNewImg = 1;
                    }
                }
                else if(changeDir === 0) {
                    calcNewImg = getLatestOpenedImg - 1;
                    if(calcNewImg < 1) {
                        calcNewImg = galleryImages.length;
                    }    
                }

                newImg.setAttribute("src", "http://localhost/photoGalleryWeb/web/images/macro/img" + calcNewImg + ".jpg");
                newImg.setAttribute("id", "current-img");

                getLatestOpenedImg = calcNewImg; 
            }
            
            
            window.addEventListener("keydown", function (event) {

                    if (event.key === "ArrowRight") {
                        // Next image
                        changeImg(1);
                    } 

                    else if (event.key === "ArrowLeft") {

                        changeImg(0);
                    }

                    else if (event.key === "Escape") {

                        closeImg();
                    }

});

                
            </script>

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

        </section>


        <f-ooter></f-ooter>

    </body>


</html>