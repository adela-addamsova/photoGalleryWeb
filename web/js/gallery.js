let galleryImages = document.querySelectorAll(".gallery-img");
/* proměnná galleryImages zavolá v dokumentu všechny objekty s třídou gallery-img */
let getLatestOpenedImg;
let windowWidth = window.innerWidth;




if (galleryImages) {
    galleryImages.forEach(function (image, index) {
        /* foraech metoda - použije se pro všechny obrázky 
        + index v rámci gallery-img array */
        image.onclick = function () {
            /* co se stane, když kliknu na obrázek */
            let getElementCss = window.getComputedStyle(image);
            /* vezme obrázek */
            let getFullImgUrl = getElementCss.getPropertyValue("background-image");
            /* vezme url background image */
            let getImgUrlPos = getFullImgUrl.split("/images/macro/thumbs/");
            /* rozdělí url */
            let setNewImgUrl = getImgUrlPos[1].replace('")', '');
            /* vymaže z konce url nadbytečné ") */

            getLatestOpenedImg = index + 1;

            let container = document.body;
            /* proměnná, co se vytvoří v body dokumentu - vyskakovací okno */
            let newImgWindow = document.createElement("div");
            /* vytvoří nový element stránky */
            container.appendChild(newImgWindow);
            /* div box obsahující obrázek */
            newImgWindow.setAttribute("class", "img-window");
            /* přidá elementu class img-window */
            newImgWindow.setAttribute("onclick", "closeImg()");
            /* když na okno kliknu, zavře se obrázek */

            let newImg = document.createElement("img");
            /* nový img element */
            newImgWindow.appendChild(newImg);
            /* insert newImg into newImgWindow */
            newImg.setAttribute("src", "images/macro/" + setNewImgUrl);
            /* vyrobí url do složky s obrázky v full kvalitě */
            newImg.setAttribute("id", "current-img");


            newImg.onload = function () {
                /* create function for buttons that appear within the popup */
                let imgWidth = this.width;
                /*getting the width of loaded img */
                let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 60;
                /* calc of width for buttons */

                let newNextBtn = document.createElement("a");
                /* create previous/next button */
                let btnNextImg = document.createElement("img");
                /* create text for the button - CHANGE TO IMG */
                btnNextImg.setAttribute("src", "logo/angle_right.png");
                newNextBtn.appendChild(btnNextImg);
                /* append text to the btn */
                container.appendChild(newNextBtn);
                /* insert btn to the document */
                newNextBtn.setAttribute("class", "img-btn-next");
                /* create class for btn */
                newNextBtn.setAttribute("onclick", "changeImg(1)");
                /* create onclick event with function */
                /*  newNextBtn.style.cssText = "right: " + (calcImgToEdge) + "px;"; */
                /* calc of left spacing for the btn */

                let newPrevBtn = document.createElement("a");
                let btnPrevImg = document.createElement("img");
                btnPrevImg.setAttribute("src", "logo/angle_left.png");
                newPrevBtn.appendChild(btnPrevImg);
                container.appendChild(newPrevBtn);
                newPrevBtn.setAttribute("class", "img-btn-prev");
                newPrevBtn.setAttribute("onclick", "changeImg(0)");
                /* newPrevBtn.style.cssText = "left: " + calcImgToEdge + "px;"; */


                /* all this code within the function to load a img first and get the 
                width for btn spacing */

                let newCloseBtn = document.createElement("a");
                let btnCloseImg = document.createElement("img");
                btnCloseImg.setAttribute("src", "logo/x-mark.png");
                newCloseBtn.appendChild(btnCloseImg);
                container.appendChild(newCloseBtn);
                newCloseBtn.setAttribute("class", "img-btn-close");
                newCloseBtn.setAttribute("onclick", "closeImg()");
            }
        }
    });
}





function closeImg() {

    document.querySelector(".img-window").remove();
    /* click on class img-window and remove it */
    document.querySelector(".img-btn-next").remove();
    document.querySelector(".img-btn-prev").remove();
    document.querySelector(".img-btn-close").remove();
    /* remove btns too */

}

function changeImg(changeDir) {
    /* change direction - next to 1, prev to 0 */
    document.querySelector("#current-img").remove();
    /* remove current img before showing another */

    let getImgWindow = document.querySelector(".img-window");
    let newImg = document.createElement("img");
    getImgWindow.appendChild(newImg);
    /* create new img element in the window */

    let calcNewImg;
    if (changeDir === 1) {
        /* if change direction = 1 = next img */
        calcNewImg = getLatestOpenedImg + 1;
        /* open next img */
        if (calcNewImg > galleryImages.length) {
            calcNewImg = 1
            /* if next image is the last one start over again */
        }
    }
    else if (changeDir === 0) {
        /* if change direction = 0 = prev img */
        calcNewImg = getLatestOpenedImg - 1;
        /* open prev img */
        if (calcNewImg < 1) {
            calcNewImg = galleryImages.length;
            /* if prev image is the first one open up the last img in lenght */
        }
    }

    newImg.setAttribute("src", "images/macro/img" + calcNewImg + ".jpg");
    newImg.setAttribute("id", "current-img");
    /* set src and id of new img */

    getLatestOpenedImg = calcNewImg;

    newImg.onload = function () {
        let imgWidth = this.width;
        let calcImgToEdge = ((windowWidth - imgWidth) / 2) - 60;

        let nextBtn = document.querySelector(".img-btn-next");
        /* nextBtn.style.cssText = "right: " + (calcImgToEdge) + "px;"; */

        let prevBtn = document.querySelector(".img-btn-prev");
        /*  prevBtn.style.cssText = "left: " + calcImgToEdge + "px;"; */
    }
    /* styling again the butn for img with another width */
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