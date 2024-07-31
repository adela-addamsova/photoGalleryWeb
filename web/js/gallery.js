let galleryImages = document.querySelectorAll("#gallery img");
let getLatestOpenedImg;
let windowWidth = window.innerWidth;

if (galleryImages) {
    galleryImages.forEach(function (image, index) {
        image.onclick = function () {
            let getFullImgUrl = image.src;
            let urlSplit = getFullImgUrl.split("/");
            let srcUrl = urlSplit[0] + "/" + urlSplit[1] + "/" + urlSplit[2] + "/" + urlSplit[3] + "/" + urlSplit[4] + "/" + urlSplit[5] + "/" + urlSplit[6] + "/" + urlSplit[7] + "/";
            let getImgUrlPos = getFullImgUrl.split(srcUrl);
            let fldUrl = urlSplit[6] + "/";
            let setNewImgUrl = getImgUrlPos[1].replace('")', '');

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
            newImg.setAttribute("src", "http://localhost/photoGalleryWeb/web/images/" + fldUrl + setNewImgUrl);
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
    // get current img url
    let getFullImgUrl = document.querySelector("#current-img").src;
    let urlSplit = getFullImgUrl.split("/");
    let srcUrl = urlSplit[0] + "/" + urlSplit[1] + "/" + urlSplit[2] + "/" + urlSplit[3] + "/" + urlSplit[4] + "/" + urlSplit[5] + "/" + urlSplit[6] + "/";

    // remove current img
    document.querySelector("#current-img").remove();
    // get container
    let getImgWindow = document.querySelector(".img-window");
    // get new img
    let newImg = document.createElement("img");
    getImgWindow.appendChild(newImg);

    let calcNewImg;
    if (changeDir === 1) {
        calcNewImg = getLatestOpenedImg + 1;
        if (calcNewImg > galleryImages.length) {
            calcNewImg = 1;
        }
    }
    else if (changeDir === 0) {
        calcNewImg = getLatestOpenedImg - 1;
        if (calcNewImg < 1) {
            calcNewImg = galleryImages.length;
        }
    }


    newImg.setAttribute("src", srcUrl + "img" + calcNewImg + ".jpg");
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