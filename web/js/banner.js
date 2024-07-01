let items = document.querySelectorAll('.slider .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');


let active = 2;
function loadShow() {
    let stt = 0;
    items[active].style.transform = `none`;
    items[active].style.zIndex = 100;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;
    for (var i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${160 * stt}px) 
            scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zIndex = 99;
        items[i].style.filter = 'blur(15px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
    stt = 0;
    for (var i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-160 * stt}px) 
            scale(${1 - 0.2 * stt}) perspective(16px) rotateY(1deg)`;
        items[i].style.zIndex = 99;
        items[i].style.filter = 'blur(15px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
}
loadShow();


next.onclick = function () {
    active = active + 1 < items.length ? active + 1 : active = 0;
    /* if active + 1 < item.length then active + 1 else active = 0*/
    loadShow();
}
prev.onclick = function () {
    active = active - 1 >= 0 ? active - 1 : active = 4;
    loadShow();
}
