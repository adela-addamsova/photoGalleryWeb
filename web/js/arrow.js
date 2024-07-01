let images = document.querySelectorAll(".gallery-img");
let index = 0;

 

// Function to change the image

function changeImage() {

    let imgElement = document.getElementById("galleryImage");

    imgElement.src = images[index];

}

 

// Listen for keydown event

window.addEventListener("keydown", function(event) {

    if (event.key === "ArrowRight") {

        // Next image

        index = (index + 1) % images.length;

        changeImage();

    } else if (event.key === "ArrowLeft") {

        // Previous image

        index = (index - 1 + images.length) % images.length;

        changeImage();

    }

});

 

// Set initial image

changeImage();