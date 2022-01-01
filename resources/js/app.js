require('./bootstrap');

var swiper = new Swiper(".swiper", {
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    },
});
